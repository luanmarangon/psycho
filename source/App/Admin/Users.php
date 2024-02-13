<?php


namespace Source\App\Admin;

use Source\Models\Auth;
use Source\Models\User;
use Source\Support\Email;
use Source\App\Admin\Admin;

class Users extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {

        $users = (new User())->findUser()->order("active ASC")->fetch(true);
        // $users = (new User())->findUser("level<10")->fetch(true);


        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("user", [
            "head" => $head,
            "users" => $users
        ]);
    }

    public function user(array $data)
    {
        if (empty($_GET['action'])) {
            $action = null;
        } else {
            $action = $_GET['action'];
        }

        //Inativar
        if (!empty($action) && $action == "Inativar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $user = (new User())->findById($data['user_id']);

            $user->active = 'I';

            if (!$user->save()) {
                $json["message"] = $user->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Usuário Atualizado com sucesso...")->flash();
            redirect(url("/admin/usuarios/$user->id"));
        }

        //Inativar
        if (!empty($action) && $action == "Ativar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $user = (new User())->findById($data['user_id']);

            $user->active = 'A';

            if (!$user->save()) {
                $json["message"] = $user->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Usuário Atualizado com sucesso...")->flash();
            redirect(url("/admin/usuarios/$user->id"));
        }

        if (!empty($action) && $action == "newpasswd") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $user = (new User())->findById($data['user_id']);

            $user->password = passwd_genered();

            $people = $user->userPeople($user->id)->fetch();

            //Montando E-Mail
            $recipient = $people->mail;
            $recipientName = $people->firstName . " " . $people->lastName;


            $body = "
            <html>
            <head>
                <style>
                    /* Estilos de formatação do e-mail */
                    body {
                        font-family: Arial, sans-serif;
                    }
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        background-color: #f9f9f9;
                    }
                    h2 {
                        color: #333;
                    }
                    p {
                        margin-bottom: 15px;
                    }
                    span {
                        font-weight: bold;
                        font-style: italic;
                    }            
                    a:link, a:visited {
                        text-decoration: none
                        }
                    a:hover {
                        text-decoration: underline;
                        }
                    a:active {
                        text-decoration: none
                        }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>Redefinição de senha</h2>
                    <p>Olá, tudo bem?</p>
                    <p>Você solicitou a redefinição da sua senha, na plataforma <a href='" . CONF_SITE_DOMAIN_LINK . "'>" . CONF_SITE_DOMAIN . "</a>.</p>

                    <h3>Aqui está a sua nova senha:</h3>
                    <blockquote>$user->password</blockquote>
                    <br>
                    <br>
                    <p>Atenciosamente Equipe " . CONF_SITE_NAME . "</p>
                </div>
            </body>
            </html>
        ";

            $email = (new Email())->bootstrap("Nova senha Redefinida", $body, $recipient, $recipientName)->send();
            $user->save();

            $this->message->success("Usuário Atualizado com sucesso...")->flash();
            redirect(url("/admin/usuarios/$user->id"));
        }

        //read
        $user = null;
        if (!empty($data['user_id'])) {
            $userId = filter_var($data["user_id"], FILTER_SANITIZE_STRIPPED);
            $user = (new User())->userPeople($userId)->fetch();
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("userEdit", [
            "head" => $head,
            "user" => $user
        ]);
    }

    public function profile(array $data)
    {
        $user = Auth::user();

        //update
        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $userUpdate = (new User())->findById($user->id);
            $userUpdate->username = $data['username'];

            if (!empty($data['password']) || !empty($data['confpassword'])) {
                if ($data['password'] === $data['confpassword']) {
                    $userUpdate->password = $data['password'];
                    echo "Senhas iguais.";
                } else {
                    echo "As senhas digitadas são diferentes.";
                }
            }
            if ($userUpdate->id != Auth::user()->id) {
                //Retorno
                return;
            }

            
            if (!$userUpdate->save()) {
                $json["message"] = $userUpdate->message()->render();
                echo json_encode($json);
                return;
            }

           





            var_dump($data);
            var_dump(Auth::user()->username);

            var_dump($userUpdate);




            // exit();

            $this->message->success("Usuário Atualizado com sucesso...")->flash();
            redirect(url("/admin/perfil"));
        }



        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("profile", [
            "head" => $head,
            "user" => $user
        ]);
    }
}
