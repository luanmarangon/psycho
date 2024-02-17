<?php

namespace Source\App\Admin;

use Source\Models\Auth;
use Source\Core\Controller;
use Source\Models\licenses;

class Login extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function root(): void
    {
        $user = Auth::user();

        // if ($user && $user->level >= 5) {
        // redirect("/admin/dash");
        // } else {
        redirect("/admin/login");
        // }

    }

    public function login(?array $data): void
    {

        // var_dump($data);
        // exit();

        $user = Auth::user();

        // if ($user && $user->level >= 5) {
        //     redirect("/admin/dashboard");
        // }

        if (!empty($data["login"]) && !empty($data["password"])) {

            //VALIDAÇÃO DE VARIAS TENTATIVAS
            // if (request_limit("loginlogin", 3, 60 * 5)) {
            //     $json["message"] = $this->message->error("ACESSO NEGADO: Aguarde por 05 minutos para tentar novamente")->render();
            //     echo json_encode($json);
            //     return;
            // }



            $auth = new Auth();
            $login = $auth->login($data["login"], $data["password"], true, 5);

            $license = (new licenses())->find("expiration >= date(now())")->fetch(true);

            // var_dump($license);
            // exit();

            if (!$license) {
                $this->message->error("Acesso indisponivel, por favor entrar em contato com o administrador.")->flash();
                redirect(url("/admin/login"));
            }

            if ($login) {
                $this->message->success("Login efetuado com sucesso...")->flash();
                redirect(url("/admin/dashboard"));
            } else {
                $this->message->warning($auth->message())->flash();
                redirect(url("/admin/login"));
            }

            return;
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("authentication-login", [
            "head" => $head,
            "cookie" => filter_input(INPUT_COOKIE, "authEmail")
        ]);
    }


    public function loginCreate()
    {

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("authentication-register", [
            "head" => $head
        ]);
    }


    public function logoff(): void
    {
        $this->message->success("Você saiu com sucesso....")->flash();
        // $this->message->success("Você saiu com sucesso {$this->user->first_name}")->flash();

        Auth::logout();

        redirect("/admin/login");
    }
}
