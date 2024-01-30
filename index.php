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
$route->get("/empresa", "Company:home");
$route->get("/empresa-social/{company_id}", "Company:socialMedia");


//Peoples
$route->get("/pessoas", "Peoples:home");


//Users
$route->get("/usuarios", "Users:home");


//Services
$route->get("/servicos", "Services:home");


//Blogs
$route->get("/blog", "Blogs:home");

//Faq's
$route->get("/faq", "Faq:home");



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
