<?php
use MVC\core\app;
// require_once("../app/core/app.php");
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS."app");
define("CONFIG",APP.DS."config");
define("CONTROLLERS",APP.DS."controllers");
define("CORE",APP.DS."core");
define("MODELS",APP.DS."models");
define("VIEWS",APP.DS."views");

//Config
define("DATABASE_LITTLELEMON","little_lemon_db");
define("DATABASE_STUDENT","student_db");
define("DATABASE_TYPE","mysql");
define("USERNAME","root");
define("PASSWORD","");
define("SERVER","localhost");
define("DOMAIN_NAME","http://localhost:7882/MVC/public/");



require_once("../vendor/autoload.php");
$p = new app();





?>