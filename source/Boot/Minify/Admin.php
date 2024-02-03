<?php

use MatthiasMullie\Minify\JS;
use MatthiasMullie\Minify\CSS;

if (strpos(url(), "localhost")) {
    /**
     * CSS
     */
    $minCSS = new CSS();
    $minCSS->add(__DIR__ . "/../../../shared/styles/styles.css");
    $minCSS->add(__DIR__ . "/../../../shared/styles/boot.css");
    $minCSS->add(__DIR__ . "/../../../shared/styles/ajax.css");


    //Theme CSS
    $cssDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = __DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/assets/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCSS->add($cssFile);
        }
    }

    //Minify CSS
    $minCSS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/assets/style.css");

    /**
     * JS
     */
    $minJS = new JS();
    $minJS->add(__DIR__ . "/../../../shared/scripts/jquery.min.js");
    $minJS->add(__DIR__ . "/../../../shared/scripts/jquery.mask.min.js");
    $minJS->add(__DIR__ . "/../../../shared/scripts/mask.js");
    $minJS->add(__DIR__ . "/../../../shared/scripts/cep.js");
    $minJS->add(__DIR__ . "/../../../shared/scripts/ajax.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN. "/assets/libs/jquery/dist/jquery.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN. "/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN. "/assets/libs/apexcharts/dist/apexcharts.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN. "/assets/libs/simplebar/dist/simplebar.js");

    //Theme JS
    $jsDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = __DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/assets/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJS->add($jsFile);
        }
    }

    //Minify JS
    $minJS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/assets/scripts.js");
}