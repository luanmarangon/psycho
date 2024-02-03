<?php


namespace Source\App\Admin;

use Source\Core\Controller;
use Source\Models\Blog;

class Blogs extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {
        $blogs = (new Blog())->find()->fetch(true);
        
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("blogs", [
            "head" => $head,
            "blogs" => $blogs
        ]);
    }
}
