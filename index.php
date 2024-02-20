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
$route->get("/blog/{blog_id}", "Web:blogList");
$route->get("/blog/categoria/{category}", "Web:blogCategory");
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
$route->get("/logoff", "Login:logoff");


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
// $route->post("/psicologas", "Peoples:psychologist");
// $route->get("/psicologas/{people_id}", "Peoples:psychologist");
// $route->get("/psicologas/{psycho_id}", "Peoples:psychologist");
$route->get("/pessoa/{people_id}/novo-psicologo", "Peoples:psychologistCreate");
$route->post("/pessoa/{people_id}/novo-psicologo", "Peoples:psychologistCreate");
$route->post("/psicologo/{psycho_id}", "Peoples:psychologistCreate");
$route->get("/psicologo/{psycho_id}", "Peoples:psychologist");
// $route->post("/psicologo/{psycho_id}", "Peoples:psychologist");

$route->get("/psicologo/{psycho_id}/redes-sociais", "Peoples:socialMedia");
$route->get("/psicologo/{psycho_id}/nova-rede-social", "Peoples:socialMediaPsycho");
$route->post("/psicologo/{psycho_id}/nova-rede-social", "Peoples:socialMediaPsycho");
$route->get("/psicologo/{psycho_id}/rede-social/{socialMedia_id}", "Peoples:socialMediaPsycho");
$route->post("/psicologo/{psycho_id}/rede-social", "Peoples:socialMediaPsycho");


//Users
$route->get("/usuarios", "Users:home");
$route->get("/usuarios/{user_id}", "Users:user");
$route->get("/usuarios/{user_id}/nova-senha", "Users:userPasswd");
$route->get("/usuarios/{user_id}/inativar", "Users:user");
// $route->post("/usuarios/{user_id}", "Users:user");

$route->get("/perfil", "Users:profile");
$route->post("/perfil", "Users:profile");


//Configurações
$route->get("/configuracoes", "Settings:home");

$route->get("/configuracoes/email", "Settings:mail");
$route->post("/configuracoes/email", "Settings:mail");
$route->get("/configuracoes/email/{mail_id}", "Settings:mail");
$route->post("/configuracoes/email/{mail_id}", "Settings:mail");

$route->get("/configuracoes/sobre", "Settings:about");
$route->post("/configuracoes/sobre", "Settings:about");
$route->get("/configuracoes/sobre/{about_id}", "Settings:about");
$route->post("/configuracoes/sobre/{about_id}", "Settings:about");

$route->get("/configuracoes/valores", "Settings:values");
$route->post("/configuracoes/valores", "Settings:values");
$route->get("/configuracoes/valores/{values_id}", "Settings:values");
$route->post("/configuracoes/valores/{values_id}", "Settings:values");

//Services
$route->get("/servicos", "Service:home");
$route->get("/servico", "Service:service");
$route->post("/servico", "Service:service");
$route->get("/servico/{service_id}", "Service:service");
$route->post("/servico/{service_id}", "Service:service");


//Blogs
$route->get("/blogs", "Blogs:home");
$route->get("/blog", "Blogs:blog");
$route->post("/blog", "Blogs:blog");
$route->get("/blog/{blog_id}", "Blogs:blog");
$route->post("/blog/{blog_id}", "Blogs:blog");

//Faq's
$route->get("/faqs", "Faqs:home");
$route->get("/faq", "Faqs:faq");
$route->post("/faq", "Faqs:faq");
$route->get("/faq/{faq_id}", "Faqs:faq");
$route->post("/faq/{faq_id}", "Faqs:faq");




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
