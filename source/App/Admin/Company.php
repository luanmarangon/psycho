<?php


namespace Source\App\Admin;

use Source\Models\Address;
use Source\App\Admin\Admin;
use Source\Models\Companies;
use Source\Models\SocialMedia;
use Source\Models\CompanySocialMedia;

class Company extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {

        $company = (new Companies())->find()->fetch(true);

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("company", [
            "head" => $head,
            "company" => $company
        ]);
    }

    public function company(array $data)
    {


        //create 
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $companyCreate = new Companies();

            $companyCreate->cnpj = preg_replace('/[^0-9]/', '', $data['cnpj']);
            $companyCreate->socialReason = strtoupper($data['socialReason']);
            $companyCreate->name = strtoupper($data['name']);
            $companyCreate->stateRegistration = $data['stateRegistration'];
            $companyCreate->responsible = strtoupper($data['responsible']);
            $companyCreate->mail1 = strtolower($data['mail1']);
            $companyCreate->mail2 = strtolower($data['mail2']);
            $companyCreate->phone1 = preg_replace('/[^0-9]/', '', $data['phone1']);
            $companyCreate->phone2 = preg_replace('/[^0-9]/', '', $data['phone2']);


            $companyAddressCreate = new Address();

            $companyAddressCreate->zipcode = preg_replace('/[^0-9]/', '', $data['zipcode']);
            $companyAddressCreate->street = $data['street'];
            $companyAddressCreate->number = $data['number'];
            $companyAddressCreate->complement = $data['complement'];
            $companyAddressCreate->district = $data['district'];
            $companyAddressCreate->city = $data['city'];
            $companyAddressCreate->state = $data['state'];


            $address = $companyAddressCreate->street . ", "  .
                $companyAddressCreate->number . ", " .
                $companyAddressCreate->complement . ", "  .
                $companyAddressCreate->district . ", "  .
                $companyAddressCreate->city . ", "  .
                $companyAddressCreate->state . ", "  .
                $companyAddressCreate->zipcode;

            $addressAPI = maps_api($address);


            $companyAddressCreate->latitude = $addressAPI['latitude'];
            $companyAddressCreate->longitude = $addressAPI['longitude'];


            if (!$companyAddressCreate->save()) {
                $json["message"] = $companyAddressCreate->message()->render();
                echo json_encode($json);
                return;
            }

            //Informando o id do Address no Company para realizar a inserção 
            $companyCreate->address_id = $companyAddressCreate->id;

            if (!$companyCreate->save()) {
                $json["message"] = $companyCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Empresa criada com sucesso...")->flash();
            redirect(url("/admin/empresa/$companyCreate->id"));
        }



        //update 
        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);



            $companyUpdate = (new Companies())->findById($data['company_id']);

            $companyUpdate->cnpj = preg_replace('/[^0-9]/', '', $data['cnpj']);
            $companyUpdate->socialReason = strtoupper($data['socialReason']);
            $companyUpdate->name = strtoupper($data['name']);
            $companyUpdate->stateRegistration = $data['stateRegistration'];
            $companyUpdate->responsible = strtoupper($data['responsible']);
            $companyUpdate->mail1 = strtolower($data['mail1']);
            $companyUpdate->mail2 = strtolower($data['mail2']);
            $companyUpdate->phone1 = preg_replace('/[^0-9]/', '', $data['phone1']);
            $companyUpdate->phone2 = preg_replace('/[^0-9]/', '', $data['phone2']);


            // Address do Company
            $companyAddressUpdate = (new Address())->findById($companyUpdate->id);

            $companyAddressUpdate->zipcode = preg_replace('/[^0-9]/', '', $data['zipcode']);
            $companyAddressUpdate->street = $data['street'];
            $companyAddressUpdate->number = $data['number'];
            $companyAddressUpdate->complement = $data['complement'];
            $companyAddressUpdate->district = $data['district'];
            $companyAddressUpdate->city = $data['city'];
            $companyAddressUpdate->state = $data['state'];


            $address = $companyAddressUpdate->street . ", "  .
                $companyAddressUpdate->number . ", " .
                $companyAddressUpdate->complement . ", "  .
                $companyAddressUpdate->district . ", "  .
                $companyAddressUpdate->city . ", "  .
                $companyAddressUpdate->state . ", "  .
                $companyAddressUpdate->zipcode;

            $addressAPI = maps_api($address);


            $companyAddressUpdate->latitude = $addressAPI['latitude'];
            $companyAddressUpdate->longitude = $addressAPI['longitude'];


            if (!$companyAddressUpdate->save()) {
                $json["message"] = $companyAddressUpdate->message()->render();
                echo json_encode($json);
                return;
            }


            if (!$companyUpdate->save()) {
                $json["message"] = $companyUpdate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Empresa Atualizada com sucesso...")->flash();
            redirect(url("/admin/empresa/$companyUpdate->id"));
        }

        //delete 
        if (!empty($data["action"]) && $data["action"] == "delete") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $companyDelete = (new Companies())->findById($data['company_id']);

            $companies = (new Companies())->find()->count();

            if ($companies == 1) {
                $this->message->success("A exclusão da Empresa não está autorizada.")->flash();
                redirect(url("/admin/empresas"));
            }

            if (!$companyDelete->destroy()) {
                $json["message"] = $companyDelete->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Empresa excluída com sucesso...")->flash();
            redirect(url("/admin/empresas"));
        }

        //read
        $companyEdit = null;
        $address = null;
        if (!empty($data["company_id"])) {
            $companyId = filter_var($data["company_id"], FILTER_SANITIZE_STRIPPED);
            $companyEdit = (new Companies())->findById($companyId);
            $address = (new Address())->findById($companyEdit->address_id);
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("companyView", [
            "head" => $head,
            "company" => $companyEdit,
            "address" => $address
        ]);
    }

    public function socialMedia(array $data)
    {
        //read
        $socialMediaCompanyEdit = null;
        if (!empty($data["company_id"])) {
            $companyId = filter_var($data["company_id"], FILTER_SANITIZE_STRIPPED);
            $socialMediaCompanyEdit = (new Companies())->companySocialMeida($companyId)->fetch(true);
            $company = (new Companies())->findById($companyId);
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("companyMedia", [
            "head" => $head,
            "socialMediaCompany" => $socialMediaCompanyEdit,
            "company" => $company
        ]);
    }

    public function socialMediaCreate(?array $data): void
    {
        //    var_dump($data);

        //create 
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $socialMediaCreate = new SocialMedia();
            $socialMediaCreate->socialMedia = $data["redeSocialName"];
            $socialMediaCreate->link = $data["redeSocialLink"];



            if (!$socialMediaCreate->save()) {
                $json["message"] = $socialMediaCreate->message()->render();
                echo json_encode($json);
                return;
            }


            $socialCompanyCreate = new CompanySocialMedia();
            $socialCompanyCreate->company_id = $data["company_id"];
            $socialCompanyCreate->socialMedia_id = $socialMediaCreate->id;




            if (!$socialCompanyCreate->save()) {
                $json["message"] = $socialCompanyCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Redes Sociais cadastradas com sucesso...")->flash();
            redirect(url("/admin/empresa/{$data['company_id']}/redes-sociais"));
            // echo json_encode(["redirect" => url("/admin/empresa/{$data['company_id']}/redes-sociais")]);
            // echo json_encode(["reload" => true]);
            // return;
        }

        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $socialMediaUpdate = (new SocialMedia())->findById($data['socialMedia_id']);
            $socialMediaUpdate->socialMedia = $data["redeSocialName"];
            $socialMediaUpdate->link = $data["redeSocialLink"];

            if (!$socialMediaUpdate->save()) {
                $json["message"] = $socialMediaUpdate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Redes Sociais atualizadas com sucesso...")->flash();
            redirect(url("/admin/empresa/{$data['company_id']}/redes-social/{$socialMediaUpdate->id}"));
            // echo json_encode(["reload" => true]);
            // return;
        }


        if (!empty($data["action"]) && $data["action"] == "delete") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $socialMediaCompanyDelete = (new CompanySocialMedia())->find("socialMedia_id = {$data['socialMedia_id']} and company_id = {$data['company_id']}")->fetch();
            $socialMediaDelete = (new SocialMedia())->findById($data['socialMedia_id']);


            if (!$socialMediaCompanyDelete->destroy()) {
                $json["message"] = $socialMediaCompanyDelete->message()->render();
                echo json_encode($json);
                return;
            }
            if (!$socialMediaDelete->destroy()) {
                $json["message"] = $socialMediaDelete->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Redes Sociais cadastradas com sucesso...")->flash();
            redirect(url("/admin/empresa/{$data['company_id']}/redes-sociais"));
        }


        if (!empty($data["action"]) && $data["action"] == "deleteSelected") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            if ($data['selectedIds']) {

                foreach ($data['selectedIds'] as $item) {
                    $sMediaSelected = str_replace('selectedIds-', '', $item);
                    $socialMediaSelect = (new SocialMedia())->findById($sMediaSelected);

                    $socialMediaCompanyDelete = (new CompanySocialMedia())->find("socialMedia_id = {$sMediaSelected} and company_id = {$data['company_id']}")->fetch();
                    $socialMediaDelete = (new SocialMedia())->findById($sMediaSelected);

                    if (!$socialMediaCompanyDelete->destroy()) {
                        $json["message"] = $socialMediaCompanyDelete->message()->render();
                        echo json_encode($json);
                        return;
                    }
                    if (!$socialMediaDelete->destroy()) {
                        $json["message"] = $socialMediaDelete->message()->render();
                        echo json_encode($json);
                        return;
                    }
                }
            }
            $this->message->success("Redes Sociais cadastradas com sucesso...")->flash();
            redirect(url("/admin/empresa/{$data['company_id']}/redes-sociais"));
        }

        //read
        $companyId = filter_var($data["company_id"], FILTER_SANITIZE_STRIPPED);
        $company = (new Companies())->findById($companyId);

        $socialCompanyEdit = null;
        // $company = null;
        if (!empty($data["socialMedia_id"])) {
            $socialMediaId = filter_var($data["socialMedia_id"], FILTER_SANITIZE_STRIPPED);
            $socialCompanyEdit = (new SocialMedia())->findById($socialMediaId);
            // $company = (new CompanySocialMedia())->companyMedia($socialMediaId)->fetch();
            // var_dump($company);
            // var_dump($company['name']);

            // exit();
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("companyMediaEdit", [
            "head" => $head,
            "socialCompany" => $socialCompanyEdit,
            "company" => $company
        ]);
    }
}
