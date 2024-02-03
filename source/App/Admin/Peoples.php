<?php


namespace Source\App\Admin;

use Source\Core\Controller;
use Source\Models\People;
use Source\Models\Psychologist;

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
        $people = (new People())->personalInformation($data['people_id'])->fetch();
        $contactPeople = (new People())->contactPeople($data['people_id'])->fetch(true);
        $psycho = (new Psychologist())->find("people_id = {$data['people_id']}")->fetch();

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("peoplesView", [
            "head" => $head,
            "people" => $people,
            "contactPeople" => $contactPeople,
            "psycho" => $psycho
        ]);
    }

    public function psychologist(array $data)
    {
        $peopleId = $data['people_id'];
        $psychologist = (new People())->psychologistPeople($peopleId)->fetch();


        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("psychologist", [
            "head" => $head,
            "psychologist" => $psychologist
        ]);
    }

    public function socialMedia(array $data)
    {
        $psychologistId = $data['psycho_id'];
        $socialMediaPsychologist = (new Psychologist())->psychologistSocialMeida($psychologistId)->fetch(true);
        $psycho = (new Psychologist())->findById($psychologistId);
        $people = (new People())->findById($psycho->people_id);

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("psychologistMedia", [
            "head" => $head,
            "socialMediaPsychologist" => $socialMediaPsychologist,
            "people" => $people
        ]);
    }







}
