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
// $route->post("/", "Web:home");


/**
 * ADMIN ROUTES
 */
// $route->namespace("Source\App\Admin");
// $route->group("/admin");

//login
// $route->get("/", "Login:root");
// $route->get("/login", "Login:login");
// $route->post("/login", "Login:login");


//users
// $route->get("/users/home", "Users:home");
// $route->post("/users/home", "Users:home");
// $route->get("/users/home/{search}/{page}", "Users:home");
// $route->get("/users/user", "Users:user");
// $route->post("/users/user", "Users:user");
// $route->get("/users/user/{user_id}", "Users:user");
// $route->post("/users/user/{user_id}", "Users:user");



/**
 * ERROR ROUTES
 */

// $route->namespace("Source\App")->group("/ops");
// $route->get("/{errcode}", "Web:error");

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