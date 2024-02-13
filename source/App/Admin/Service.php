<?php


namespace Source\App\Admin;

use Source\App\Admin\Admin;
use Source\Models\Services;

class Service extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {

        $services = (new Services())->find()->fetch(true);
        
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("services", [
            "head" => $head,
            "services" => $services
        ]);
    }
}
