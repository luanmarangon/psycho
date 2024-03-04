<?php


namespace Source\App\Admin;

use Source\Models\Auth;
use Source\App\Admin\Admin;

class Dash extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {
        // var_dump(Auth::user());

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("dash", [
            "head" => $head
        ]);
    }
}
