<?php


namespace Source\App\Admin;

use Source\Core\Controller;
use Source\Models\People;

class Peoples extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {
        $peoples = (new People())->find()->fetch(true);
        
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("peoples", [
            "head" => $head,
            "peoples" => $peoples
        ]);
    }

    public function people(array $data)
    {
        $peopleId = $data['people_id'];
        $people = (new People())->personalInformation($peopleId)->fetch();
        
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("peoplesView", [
            "head" => $head,
            "people" => $people
        ]);
    }
}
