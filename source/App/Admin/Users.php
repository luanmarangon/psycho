<?php


namespace Source\App\Admin;

use Source\Models\Auth;
use Source\Models\User;
use Source\Support\Email;
use Source\App\Admin\Admin;
use Source\Support\Pager;

class Users extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home(array $data): void
    {

        $userAuth = Auth::user();
        if ($userAuth->level > 8) {
            $users = (new User())->findUserFull();
        } else {
            $users = (new User())->findUser();
        }

        //read
        $search = null;

        if (!empty($data["search"]) && str_search($data["search"]) != "all") {
            $search = str_search($data["search"]);
            $users = (new User())->find("
                                            MATCH(firstName, lastName, cpf, rg) AGAINST(:s IN BOOLEAN MODE) 
                                            OR firstName LIKE CONCAT('%', :s, '%') 
                                            OR lastName LIKE CONCAT('%', :s, '%')
                                            OR cpf LIKE CONCAT('%', :s, '%')
                                            OR rg LIKE CONCAT('%', :s, '%')
                                        ", "s={$search}");

            $this->message->success("Foram encontrados [ {$users->count()} ] resultados referentes a pesquisa.")->flash();


            if (!$users->count()) {
                $users = (new User())->find();
                $this->message->info("Sua pesquisa não obteve resultados. Por favor, revise seus critérios de pesquisa")->flash();
                redirect("/admin/usuarios");
            }
        }
        $all = ($search ?? "all");
        $pager = new Pager(url("/admin/usuarios/{$all}/"));
        $pager->pager($users->count(), 9, (!empty($data["page"]) ? $data["page"] : 1));

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("user", [
            "head" => $head,
            "users" => $users->limit($pager->limit())->offset($pager->offset())->order("active, level DESC")->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    public function user(array $data)
    {
        $userAuth = Auth::user();

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

            if ($userAuth->level < 8) {
                $this->message->warning("Usuário sem Permissão para Inativar Usuário. Por Favor procure o administrador do sistema!")->flash();
                redirect(url("/admin/usuarios/$user->id"));
            }

            if (!$user->save()) {
                $json["message"] = $user->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Usuário Atualizado com sucesso...")->flash();
            redirect(url("/admin/usuarios/$user->id"));
        }

        //Ativar
        if (!empty($action) && $action == "Ativar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $user = (new User())->findById($data['user_id']);

            $user->active = 'A';

            if ($userAuth->level < 8) {
                $this->message->warning("Usuário sem Permissão para Ativar Usuário. Por Favor procure o administrador do sistema!")->flash();
                redirect(url("/admin/usuarios/$user->id"));
            }

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

            if ($userAuth->level < 8) {
                $this->message->warning("Usuário sem Permissão para gerar Nova Senha. Por Favor procure o administrador do sistema!")->flash();
                redirect(url("/admin/usuarios/$user->id"));
            }

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

            $this->message->success("Nova senha enviada para o E-Mail cadastrado!")->flash();
            redirect(url("/admin/usuarios/$user->id"));
        }

        //read
        $user = null;

        if (!empty($data['user_id'])) {
            $userId = filter_var($data["user_id"], FILTER_SANITIZE_STRIPPED);
            $user = (new User())->findById($userId);

            if ($user->level < 10) {
                $user = (new User())->userPeople($userId)->fetch();
            }
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

        $userId = Auth::user()->id;
        $user = (new User())->findUser("u.id=$userId")->fetch();

        // var_dump($userId, $user);
        // exit();

        //update
        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $userUpdate = (new User())->findById($data['user_id']);
            $userOld = (new User())->findById($data['user_id']);
            $userUpdate->username = $data['username'];

            if (!empty($data['password']) || !empty($data['confpassword'])) {
                if ($data['password'] === $data['confpassword']) {
                    $userUpdate->password = $data['password'];
                } else {
                    $this->message->warning("Senhas não conferem...")->flash();
                    redirect(url("/admin/perfil"));
                }
                // return;
            }

            if ($userUpdate->id != Auth::user()->id) {
                $this->message->info("Você não possui permissão para alterar esse acesso...")->flash();
                redirect(url("/admin/perfil"));
            }

            if (!$userUpdate->save()) {
                $json["message"] = $user->message()->render();
                echo json_encode($json);
                return;
            }

            if ($data['username'] != $userOld->username) {
                $this->message->success("login alterado com sucesso. Por favor, realize um novo login...")->flash();

                // Adicionando um atraso de 5 segundos antes de efetuar o logout usando JavaScript
                echo "<script>
                        setTimeout(function() {
                            window.location.href = '" . url("/admin/logoff") . "';
                        }, 5000); // 5000 milissegundos = 5 segundos
                      </script>";
            } else {
                $this->message->success("Usuário Atualizado com sucesso...")->flash();
                redirect(url("/admin/perfil"));
            }
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
