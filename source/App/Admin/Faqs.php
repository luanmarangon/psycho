<?php


namespace Source\App\Admin;

use Source\Models\Faq;
use Source\Core\Controller;


class Faqs extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {
        $faqs = (new Faq())->find()->fetch(true);

        
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("faq", [
            "head" => $head,
            "faqs" => $faqs
        ]);
    }
}
