<?php
session_start();

define('BURL', 'http://127.0.0.1:8080/medical-project/');
define('BURLA', 'http://127.0.0.1:8080/medical-project/admin/');
define('ASSETS', 'http://127.0.0.1:8080/medical-project/assets/');

define('BL' , __DIR__.'/'); 
define('BLA' , __DIR__.'/admin/');

define('HOST' , 'localhost');
define('USER' , 'root');
define('PASSWORD' , '');
define('DB' , 'medical_services');
define('PORT' , '3307');

// connect to database
// require_once(BL.'functions/db.php');


?>