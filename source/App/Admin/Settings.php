<?php

namespace Source\App\Admin;

use Source\App\Admin\Admin;
use Source\Models\companies;
use Source\Models\AboutCompany;
use Source\Models\licenses;
use Source\Models\MailSettings;
use Source\Models\ValueBeliefs;

class Settings extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {

        $about = (new AboutCompany())->find()->fetch();
        $mail = (new MailSettings())->find()->fetch(true);
        $values = (new ValueBeliefs())->find()->fetch(true);

        // var_dump($mail);
        // exit();

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("settings", [
            "head" => $head,
            "mail" => $mail,
            "about" => $about,
            "values" => $values
        ]);
    }

    public function mail(array $data)
    {
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $mailQuery = (new MailSettings())->find("mail = :m", "m={$data['mail']}")->fetch(true);

            if ($mailQuery) {
                $this->message->warning("E-Mail já cadastrado...")->flash();
                redirect(url("/admin/configuracoes"));
            }

            $mail = new MailSettings();

            $mail->company_id = $data['company'];
            $mail->mail = $data['mail'];
            $mail->password = $data['senhaMail'];
            $mail->sender = $data['userMail'];
            $mail->smtp = $data['serverSMTP'];
            $mail->port = $data['portSMTP'];

            if (!$mail->save()) {
                $json["message"] = $mail->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Servidor SMTP cadastrado com sucesso...")->flash();
            redirect(url("/admin/configuracoes/email/$mail->id"));
            var_dump($data);
            echo "Create";
            exit();
        }

        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $mail = (new MailSettings())->findById($data['mail_id']);

            $mail->company_id = $data['company'];
            $mail->mail = $data['mail'];
            $mail->password = $data['senhaMail'];
            $mail->sender = $data['userMail'];
            $mail->smtp = $data['serverSMTP'];
            $mail->port = $data['portSMTP'];

            if (!$mail->save()) {
                $json["message"] = $mail->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Servidor SMTP atualizado com sucesso...")->flash();
            redirect(url("/admin/configuracoes/email/$mail->id"));
        }


        //read
        $mail = null;
        $company = (new Companies())->find()->fetch(true);
        $companyCount = (new Companies())->find()->count();
        if (!empty($data['mail_id'])) {
            $mailId = filter_var($data["mail_id"], FILTER_SANITIZE_STRIPPED);
            $mail = (new MailSettings())->findById($mailId);
            $company = (new Companies())->find()->fetch(true);
        }
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("mailView", [
            "head" => $head,
            "mail" => $mail,
            "company" => $company,
            "companyCount" => $companyCount
        ]);
    }

    public function about(array $data)
    {
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $about = new AboutCompany();

            $about->inspiration = $data['inspiration'];
            $about->currentSituation = $data['currentSituation'];
            $about->experience = $data['experience'];
            $about->someWords = $data['someWords'];

            if (!$about->save()) {
                $json["message"] = $about->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Informações cadastradas com sucesso...")->flash();
            redirect(url("/admin/configuracoes/sobre/$about->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $about = (new AboutCompany())->findById($data['about_id']);

            $about->inspiration = $data['inspiration'];
            $about->currentSituation = $data['currentSituation'];
            $about->experience = $data['experience'];
            $about->someWords = $data['someWords'];

            if (!$about->save()) {
                $json["message"] = $about->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Informações cadastradas com sucesso...")->flash();
            redirect(url("/admin/configuracoes/sobre/$about->id"));
        }

        //read
        $about = null;

        if (!empty($data['about_id'])) {
            $aboutId = filter_var($data["about_id"], FILTER_SANITIZE_STRIPPED);
            $about = (new AboutCompany())->findById($aboutId);
        }
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("aboutView", [
            "head" => $head,
            "about" => $about,

        ]);
    }

    public function values(array $data)
    {
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $valueQuery = (new ValueBeliefs())->find("value = :v", "v={$data['value']}")->fetch(true);

            if ($valueQuery) {
                $this->message->warning("Valor e Crença já cadastrado...")->flash();
                redirect(url("/admin/configuracoes"));
            }
            $value = new ValueBeliefs();

            $value->value = strtoupper($data['value']);
            $value->description = $data['description'];

            if (!$value->save()) {
                $json["message"] = $value->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Valores e Crenças cadastradas com sucesso...")->flash();
            redirect(url("/admin/configuracoes/valores/$value->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $value = (new ValueBeliefs())->findById($data['values_id']);

            $value->value =  strtoupper($data['value']);
            $value->description = $data['description'];

            if (!$value->save()) {
                $json["message"] = $value->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Valores e Crenças atualizado com sucesso...")->flash();
            redirect(url("/admin/configuracoes/valores/$value->id"));
        }

        //read
        $values = null;

        if (!empty($data['values_id'])) {
            $valuesId = filter_var($data["values_id"], FILTER_SANITIZE_STRIPPED);
            $values = (new ValueBeliefs())->findById($valuesId);
        }
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("valuesView", [
            "head" => $head,
            "values" => $values,

        ]);
    }

    public function code()
    {
        $codes = (new licenses())->find("expiration > date(now())")->order('expiration DESC')->fetch(true);
        
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("codes", [
            "head" => $head,
            "codes" => $codes,

        ]);
    }
}
