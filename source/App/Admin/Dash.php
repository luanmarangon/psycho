<?php


namespace Source\App\Admin;

use DateTime;
use Source\Models\Auth;
use Source\Models\People;
use Source\App\Admin\Admin;

class Dash extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home()
    {
        setlocale(LC_TIME, 'pt_BR', 'PT_BR.UTF-8', 'portuguese');

        //Primeiro Gráfico. {Cadastro de Pessoas} 

        // $month = (new People())->find("MONTH(created_at) = MONTH(CURRENT_DATE())", "", "created_at")->fetch(true);
        // $month = (new People())->distinct( "DATE_FORMAT(created_at, '%Y-%m') AS month_year");

        // var_dump($month);

        // $month = $month->month_year;
        // $month = new DateTime($month);
        // $month = strftime('%B %Y', $month->getTimestamp());

       


        // exit();

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("dash", [
            "head" => $head, 
            // "month" => $month
        ]);
    }
}
