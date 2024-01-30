<?php


namespace Source\App\Admin;

use Source\Core\Controller;
use Source\Models\Companies;

class Company extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {

        $company = (new Companies())->find()->fetch(true);

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("company", [
            "head" => $head,
            "company" => $company
        ]);
    }

    public function socialMedia(array $data)
    {
        $companyId = $data['company_id'];



        
        $socialMediaCompany = (new Companies())->companySocialMeida($companyId)->fetch(true);

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("companyMedia", [
            "head" => $head,
            "socialMediaCompany" => $socialMediaCompany
        ]);
    }
}
