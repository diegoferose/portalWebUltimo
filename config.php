<?php
/**
 * Direccion fisica del proyecto en el servidor
 */
define("DIR", "C:/xampp/htdocs/portal/");
/**
 * Direccion Web
 */
define("URL", "http://192.168.43.43/portal/web/");

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('PORT', 3306);
define('DBNAME', '123');
define('DRIVER', 'mysql');

define("DSN", DRIVER . ':host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME);

define("MODULO_DEFAULT", "portal");
define("ACCION_DEFAULT", "index");