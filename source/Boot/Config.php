<?php

/**
 * Developer
 */

define("CONF_DEVELOPER_NAME", "Luan Marangon");
define("CONF_DEVELOPER_SITE", "www.marangondev.com.br");
define("CONF_DEVELOPER_SITE_DOMAIN", "https:\\www.marangondev.com.br");





/**
 * DATA BASE
 */

if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "root");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "psycho");
} else {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "root");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "psycho");
}

/**
 * PROJECTS URLs
 */
define("CONF_URL_BASE", "http://localhost:8080/psycho");
define("CONF_URL_TEST", "http://localhost:8080/psycho");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Psycho - Clínica Psicológica");
define("CONF_SITE_TITLE", "Cuide da sua Saúde Mental");
define("CONF_SITE_DESC", "A Psycho é uma clínica psicológica dedicada a oferecer suporte e cuidados para a sua saúde mental.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "www.psychoclinica.com.br");
define("CONF_SITE_DOMAIN_LINK", "https://www.psychoclinica.com.br");
// define("CONF_SITE_ADDR_STREET", "Avenida Brasil");
// define("CONF_SITE_ADDR_NUMBER", "911");
// define("CONF_SITE_ADDR_COMPLEMENT", "Casa");
// define("CONF_SITE_ADDR_DISTRICT", "Vila Brasil");
// define("CONF_SITE_ADDR_CITY", "Presidente Prudente");
// define("CONF_SITE_ADDR_STATE", "SP");
// define("CONF_SITE_ADDR_ZIPCODE", "19.010-031");
// define("CONF_SITE_SLOGAN", "Encontre o <b>imóvel ideal</b> para você e <b>sua família</b> morar com
// <b>tranquilidade</b> e <b>segurança</b>");

/**
 * COMPANY
 */
define("CONF_COMPANY_ATTENDANCE_WEEK", "Seg/Sex");
define("CONF_COMPANY_ATTENDANCE_WEEK_TIME", "08:00h - 18:00h");
define("CONF_COMPANY_ATTENDANCE_WEEKEND", "Sábado");
define("CONF_COMPANY_ATTENDANCE_WEEKEND_TIME", "08:00h - 12:00h");
define("CONF_COMPANY_ATTENDANCE_MAIL", "contato@dominio-imob.com.br");
define("CONF_COMPANY_ATTENDANCE_PHONE", "+55 (99) 3322-4455");
define("CONF_COMPANY_ATTENDANCE_WHATS", "+55 (18) 99748-2397");
define("CONF_COMPANY_ATTENDANCE_MENSAGE", "Olá, gostaria de mais informações referente ao imóvel: ");
/**
 * teste de imovel ate buscar do banco
 */
// define("CONF_IMOVEL_TEST", "IMOB0091");



/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "LuanMarangon");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "#");
define("CONF_SOCIAL_FACEBOOK_APP", "#");
define("CONF_SOCIAL_FACEBOOK_PAGE", "marangonluan");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "#");
define("CONF_SOCIAL_GOOGLE_PAGE", "#");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "#");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "luan_marangon");
define("CONF_SOCIAL_YOUTUBE", "#");
// define("CONF_API_GOOGLE_MAPS", "AIzaSyChwUAYltIcuV82BhrVuiGkzrByR8ve19Y");


/**
 * API
 */
define("CONF_API_GOOGLE_MAPS", "AIzaSyChwUAYltIcuV82BhrVuiGkzrByR8ve19Y");
define("CONF_API_TINY", "szr0vy5xtdiw1w2g2p3gyuvtb44yy625kqlquvjfwo2qid8b");
// define("CONF_API_GOOGLE_MAPS_LINK", "https://maps.googleapis.com/maps/api/geocode/json?address=");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y/m/d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "monica");
// define("CONF_VIEW_APP", "imobapp");
define("CONF_VIEW_ADMIN", "adminPanel");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "sandbox.smtp.mailtrap.io");
define("CONF_MAIL_PORT", "2525");
define("CONF_MAIL_USER", "7ed1ac69ecb34d");
define("CONF_MAIL_PASS", "e290026f5a3105");
define("CONF_MAIL_SENDER", ["name" => "Psycho", "address" => "luan.limarangon@hotmail.com"]);
define("CONF_MAIL_SUPPORT", "luan.limarangon@hotmail.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");



// define("CONF_MAIL_HOST", "smtp.gmail.com");
// define("CONF_MAIL_PORT", "587");
// define("CONF_MAIL_USER", "luan.limarangon@gmail.com");
// define("CONF_MAIL_PASS", "npayumczcbeefneo");