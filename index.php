<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$route = new Router(url(), ":");

/**
 * WEB ROUTES
 */

$route->namespace("Source\App");
$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/servicos", "Web:services");
$route->get("/blog", "Web:blog");
$route->get("/contato", "Web:contact");
$route->get("/faq", "Web:faq");
$route->get("/politica-privacidade", "Web:privacyPolicy");


/**
 * ADMIN ROUTES
 */
$route->namespace("Source\App\Admin");
$route->group("/admin");

//login
$route->get("/", "Login:root");
$route->get("/login", "Login:login");
$route->post("/login", "Login:login");
$route->get("/cadastro", "Login:loginCreate");


//Dash
$route->get("/dashboard", "Dash:home");


//Company
$route->get("/empresas", "Company:home");
$route->get("/empresa", "Company:company");
$route->post("/empresa", "Company:company");
$route->get("/empresa/{company_id}", "Company:company");
$route->post("/empresa/{company_id}", "Company:company");

//Company Social Media - Todas as Redes Sociais da Empresa
$route->get("/empresa/{company_id}/redes-sociais", "Company:socialMedia");

//Company Social Media - Individual, cadastro, alteração e exclusão
$route->get("/empresa/{company_id}/redes-social", "Company:socialMediaCreate");
$route->post("/empresa/{company_id}/redes-social", "Company:socialMediaCreate");
$route->get("/empresa/{company_id}/redes-social/{socialMedia_id}", "Company:socialMediaCreate");
$route->post("/empresa/{company_id}/redes-social/{socialMedia_id}", "Company:socialMediaCreate");


//Peoples
$route->get("/pessoas", "Peoples:home");
$route->get("/pessoa", "Peoples:people");
$route->post("/pessoa", "Peoples:people");
$route->get("/pessoa/{people_id}", "Peoples:people");
$route->post("/pessoa/{people_id}", "Peoples:people");

//PSichologist
$route->get("/psicologas", "Peoples:psychologist");
$route->post("/psicologas", "Peoples:psychologist");
// $route->get("/psicologas/{people_id}", "Peoples:psychologist");
// $route->get("/psicologas/{psycho_id}", "Peoples:psychologist");
$route->get("/pessoa/{people_id}/novo-psicologo", "Peoples:psychologist");
$route->get("/pessoa/{people_id}/psicologo/{psycho_id}", "Peoples:psychologist");

$route->get("/psicologas-sociail/{psycho_id}", "Peoples:socialMedia");


//Users
$route->get("/usuarios", "Users:home");


//Services
$route->get("/servicos", "Service:home");


//Blogs
$route->get("/blog", "Blogs:home");

//Faq's
$route->get("/faq", "Faqs:home");



/**
 * ERROR ROUTES
 */

$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

/**
 * ROUTE
 */

$route->dispatch();

/**
 * ERROR REDIRECT
 */

if ($route->error()) {
  $route->redirect("/ops/{$route->error()}");
}


ob_end_flush();
