<?php


namespace Source\App\Admin;

use Source\Models\User;
use Source\Core\Controller;

class Users extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {

        $users = (new User())->findUser("level<10")->fetch(true);

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
}
