<?php


namespace Source\App\Admin;

use Source\Core\Controller;
use Source\Models\Address;
use Source\Models\Companies;
use Source\Models\CompanySocialMedia;
use Source\Models\SocialMedia;

class Company extends Controller
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
            // echo json_encode(["redirect" => url("/admin/empresa/{$data['company_id']}/redes-sociais")]);
            redirect(url("/admin/empresa/{$data['company_id']}/redes-sociais"));
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
