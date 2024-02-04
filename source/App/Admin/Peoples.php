<?php


namespace Source\App\Admin;

use Source\Models\User;
use Source\Models\People;
use Source\Models\Address;
use Source\Core\Controller;
use Source\Models\Psychologist;
use Source\Models\SettingsGenre;

class Peoples extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {
        $peoples = (new People())->find()->order("status ASC")->fetch(true);

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("peoples", [
            "head" => $head,
            "peoples" => $peoples
        ]);
    }

    public function people(array $data)
    {

        //create 
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $peopleCreate = new People();

            $peopleCreate->firstName = strtoupper($data['firstName']);
            $peopleCreate->lastName = strtoupper($data['lastName']);
            $peopleCreate->rg = preg_replace('/[^0-9]/', '', $data['rg']);
            $peopleCreate->cpf = preg_replace('/[^0-9]/', '', $data['cpf']);
            $peopleCreate->settingsGenre_id = $data['genre'];
            $peopleCreate->dateBirth = $data['dateBirth'];
            $peopleCreate->phone =  preg_replace('/[^0-9]/', '', $data['phone']);
            $peopleCreate->mail = strtolower($data['mail']);
            $peopleCreate->status = 'A';

            //Cadastro do Endereço
            $peopleAddressCreate = new Address();

            $peopleAddressCreate->zipcode = preg_replace('/[^0-9]/', '', $data['zipcode']);
            $peopleAddressCreate->street = $data['street'];
            $peopleAddressCreate->number = $data['number'];
            $peopleAddressCreate->complement = $data['complement'];
            $peopleAddressCreate->district = $data['district'];
            $peopleAddressCreate->city = $data['city'];
            $peopleAddressCreate->state = $data['state'];


            $address = $peopleAddressCreate->street . ", "  .
                $peopleAddressCreate->number . ", " .
                $peopleAddressCreate->complement . ", "  .
                $peopleAddressCreate->district . ", "  .
                $peopleAddressCreate->city . ", "  .
                $peopleAddressCreate->state . ", "  .
                $peopleAddressCreate->zipcode;

            $addressAPI = maps_api($address);


            $peopleAddressCreate->latitude = $addressAPI['latitude'];
            $peopleAddressCreate->longitude = $addressAPI['longitude'];

            $peopleQuery = (new People())->find("cpf = $peopleCreate->cpf")->fetch();



            if ($peopleQuery) {
                $this->message->warning("CPF já cadastrado...")->flash();
                // $json["message"] = $peopleQuery->message("CPF ja Cadastrado")->render();
                redirect(url("/admin/pessoas"));
            }

            if (!$peopleAddressCreate->save()) {
                $json["message"] = $peopleAddressCreate->message()->render();
                echo json_encode($json);
                return;
            }

            //Informando o id do Address no Company para realizar a inserção 
            $peopleCreate->address_id = $peopleAddressCreate->id;

            if (!$peopleCreate->save()) {
                $json["message"] = $peopleCreate->message()->render();
                echo json_encode($json);
                return;
            }



            $this->message->success("Pessoa cadastrada com sucesso...")->flash();
            redirect(url("/admin/pessoa/$peopleCreate->id"));
        }

        //update 
        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $peopleUpdate = (new People())->findById($data['people_id']);

            $peopleUpdate->firstName = strtoupper($data['firstName']);
            $peopleUpdate->lastName = strtoupper($data['lastName']);
            $peopleUpdate->rg = preg_replace('/[^0-9]/', '', $data['rg']);
            $peopleUpdate->cpf = preg_replace('/[^0-9]/', '', $data['cpf']);

            //Validação se houve alteração no Sexo Cadastrado
            if (!empty($data['genre'])) {
                $peopleUpdate->settingsGenre_id = $data['genre'];
                echo "Aqui";
            }

            $peopleUpdate->dateBirth = $data['dateBirth'];
            $peopleUpdate->phone =  preg_replace('/[^0-9]/', '', $data['phone']);
            $peopleUpdate->mail = strtolower($data['mail']);
            $peopleUpdate->status = 'A';

            //Cadastro do Endereço
            $peopleAddressUpdate = (new Address())->findById($peopleUpdate->address_id);

            $peopleAddressUpdate->zipcode = preg_replace('/[^0-9]/', '', $data['zipcode']);
            $peopleAddressUpdate->street = $data['street'];
            $peopleAddressUpdate->number = $data['number'];
            $peopleAddressUpdate->complement = $data['complement'];
            $peopleAddressUpdate->district = $data['district'];
            $peopleAddressUpdate->city = $data['city'];
            $peopleAddressUpdate->state = $data['state'];

            $address = $peopleAddressUpdate->street . ", "  .
                $peopleAddressUpdate->number . ", " .
                $peopleAddressUpdate->complement . ", "  .
                $peopleAddressUpdate->district . ", "  .
                $peopleAddressUpdate->city . ", "  .
                $peopleAddressUpdate->state . ", "  .
                $peopleAddressUpdate->zipcode;

            $addressAPI = maps_api($address);

            $peopleAddressUpdate->latitude = $addressAPI['latitude'];
            $peopleAddressUpdate->longitude = $addressAPI['longitude'];

            if (!$peopleAddressUpdate->save()) {
                $json["message"] = $peopleAddressUpdate->message()->render();
                echo json_encode($json);
                return;
            }

            if (!$peopleUpdate->save()) {
                $json["message"] = $peopleUpdate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Pessoa atualizada com sucesso...")->flash();
            redirect(url("/admin/pessoa/$peopleUpdate->id"));
        }

        //delete INATIVAR
        if (!empty($data["action"]) && $data["action"] == "delete") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $peopleDelete = (new People())->findById($data['people_id']);

            $peopleDelete->status = 'I';

            if (!$peopleDelete->save()) {
                $json["message"] = $peopleDelete->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Pessoa inativada com sucesso...")->flash();
            redirect(url("/admin/pessoas"));
        }


        //read
        $genre = (new SettingsGenre())->find()->fetch(true);
        $peopleEdit = null;
        $contactPeople = null;
        $psycho = null;
        if (!empty($data["people_id"])) {
            $peopleId = filter_var($data["people_id"], FILTER_SANITIZE_STRIPPED);

            $peopleEdit = (new People())->peopleAddres($peopleId)->fetch();
            $contactPeople = (new People())->contactPeople($peopleId)->fetch(true);
            $psycho = (new Psychologist())->find("people_id = {$peopleId}")->fetch();
        }


        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("peoplesView", [
            "head" => $head,
            "genre" => $genre,
            "people" => $peopleEdit,
            "contactPeople" => $contactPeople,
            "psycho" => $psycho
        ]);
    }

    public function psychologist(array $data)
    {

        //create
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            // var_dump($data);
            // exit();
            $people = (new People())->findById($data['people_id']);

            $psychologistCreate = new Psychologist();

            $psychologistCreate->people_id = $data['people_id'];
            $psychologistCreate->crp = $data['crp'];
            $psychologistCreate->issuanceDate = $data['issuanceDate'];
            $psychologistCreate->registration = $data['registration'];
            $psychologistCreate->expirationDate = $data['expirationDate'];

            if ($data['psychoStandard'] == 'on') {
                $psychologistCreate->standard = "S";
            }

            //Criação do Login para o Psicologo
            $userCreate = new User();

            //Gerando o Login, com parte do nome

            $first = explode(' ', $people->firstName);
            $firstPart = $first[0];

            $last = explode(' ', $people->lastName);
            $lastPart = end($last);
            $login = strtolower($firstPart) . "." . strtolower($lastPart);


            $userCreate->username = $login;
            $userCreate->password = 'as45as4a56s465a45a4s56a4sas54a65s4a56';
            $userCreate->level = '6';
            $userCreate->active = 'S';




            if (!$userCreate->save()) {
                $json["message"] = $userCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $psychologistCreate->users_id = $userCreate->id;

            if (!$psychologistCreate->save()) {
                $json["message"] = $psychologistCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Psicologo (a) cadastrado com sucesso...")->flash();
            redirect(url("/admin/psicologas/$psychologistCreate->id"));
        }


        //read
        $peopleEdit = null;
        $peopleId = null;
        $people = null;
        var_dump($data);

        if (!empty($data["people_id"])) {
            $peopleId = filter_var($data["people_id"], FILTER_SANITIZE_STRIPPED);
            // $peopleEdit = (new People())->psychologistPeople($peopleId)->fetch();
            $people = (new People())->findById($peopleId);
            // echo "Aqui";
        }

        exit();


        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("psychologist", [
            "head" => $head,
            "people" => $people,
            "psychologist" => $peopleEdit
        ]);
    }

    public function socialMedia(array $data)
    {
        $psychologistId = $data['psycho_id'];
        $socialMediaPsychologist = (new Psychologist())->psychologistSocialMeida($psychologistId)->fetch(true);
        $psycho = (new Psychologist())->findById($psychologistId);
        $people = (new People())->findById($psycho->people_id);

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("psychologistMedia", [
            "head" => $head,
            "socialMediaPsychologist" => $socialMediaPsychologist,
            "people" => $people
        ]);
    }
}
