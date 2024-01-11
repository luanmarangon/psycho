<?php

namespace Source\App;

use Source\Core\Controller;

class Web extends Controller{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home()
    {
        

        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.png")
        );

        echo $this->view->render("index", [
            "head" => $head,
           
        ]);
    }


}