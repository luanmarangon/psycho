<?php

namespace Source\App;

use Source\Models\Faq;
use Source\Models\Blog;
use Source\Core\Connect;

use Source\Models\Contact;
use Source\Core\Controller;
use Source\Models\Services;
use Source\Models\Companies;
use Source\Models\SocialMedia;

class Web extends Controller
{

    public function __construct()
    {
       
        
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
       

        // COLOCANDO PARA TESTE DE CONEXAO DE BCO DE DADOS
        //    Connect::getInstance();

        //COLOCANDO O SISTEMA EM MANUTENÇÃO
        //    redirect("/ops/manutencao");

        //consulta Contato
        $mail = (new Companies())->find("id = :id", "id=1", "mail1, mail2")->fetch(true);
        $phone = (new Companies())->find("id = :id", "id=1", "phone1, phone2")->fetch(true);

        //consulta Redes Sociais.
        $socialMediaCompany = (new Companies())->companySocialMeida(1)->fetch(true);
        $facebook = $instagram = $linkedin = $twitter = NULL; // Inicialize as variáveis fora do loop

        foreach ($socialMediaCompany as $key) {
            switch ($key->socialMedia) {
                case "Facebook":
                    $facebook = $key->link;
                    break;
                case "Instagram":
                    $instagram = $key->link;
                    break;
                case "Linkedin":
                    $linkedin = $key->link;
                    break;
                case "Twitter":
                    $twitter = $key->link;
                    break;
            }
        }

        define("CONF_SOCIAL_INSTAGRAM", $instagram);
        define("CONF_SOCIAL_FACEBOOK", $facebook);
        define("CONF_SOCIAL_LINKEDIN", $linkedin);
        define("CONF_SOCIAL_TWITTER", $twitter);
    }




    public function home()
    {

        $blogs = (new Blog())->blogCategory()->limit(6)->order("b.created_at DESC")->fetch(true);
        $services = (new Services())->find()->order("name ASC")->limit(4)->fetch(true);

        // $teste = (new Blog())->blogCategory()->fetch(true);
        // var_dump($blogs);



        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("home", [
            "head" => $head,
            "blogs" => $blogs,
            "services" => $services
        ]);
    }


    public function about()
    {


        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("about", [
            "head" => $head,

        ]);
    }

    public function services()
    {
        $services = (new Services())->find()->order("name ASC")->limit(6)->fetch(true);

        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("services", [
            "head" => $head,
            "services" => $services

        ]);
    }

    public function blog()
    {

        $blogs = (new Blog())->find()->order("title")->limit(6)->fetch(true);


        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("blog", [
            "head" => $head,
            "blogs" => $blogs

        ]);
    }

    public function contact()
    {
        $mail1 = (new Companies())->find("id = :id", "id=1", "mail1")->fetch();
        $mail2 = (new Companies())->find("id = :id", "id=1", "mail2")->fetch();


        // var_dump($mail1);
        // var_dump($mail2);

        // foreach ($mail as $key) {
        //     var_dump($key->mail1);
        //     # code...
        // }




        $phone = (new Companies())->find("id = :id", "id=1", "phone1, phone2")->fetch(true);

        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("contact", [
            "head" => $head,
            "phone" => $phone,
            "mail1" => $mail1,
            "mail2" => $mail2

        ]);
    }

    public function faq()
    {

        $faqs = (new Faq())->find(":s = status", "s=A")->fetch(true);


        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("faqs", [
            "head" => $head,
            "faqs" => $faqs

        ]);
    }

    public function privacyPolicy()
    {



        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("privacyPolicy", [
            "head" => $head,

        ]);
    }

    public function error(array $data): void
    {
        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "OPS";
                $error->title = "Estamos enfrentando problemas!";
                $error->message = "Parece que nosso serviço não está disponível no momento. Já estamos vendo isso mas caso precise, envie um e-mail :)";
                $error->linkTitle = "ENVIAR E-MAIL";
                $error->link = "mailto:" . CONF_MAIL_SUPPORT;
                break;

            case "manutencao":
                $error->code = "OPS";
                $error->title = "Desculpe. Estamos em manutenção!";
                $error->message = "Voltamos logo! Por hora estamos trabalhando para melhorar nosso conteúdo para você controlar as suas contas :P";
                $error->linkTitle = null;
                $error->link = null;
                break;

            default:
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indisponível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                break;
        }



        $head = $this->seo->render(
            "{$error->code} | {$error->title}",
            $error->message,
            url("/ops/{$error->code}"),
            theme("/assets/images/share.jpg"),
            false
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);
    }
}
