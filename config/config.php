<?php



// host 
define("HOST", "localhost");

//dbname
define("DBNAME", "pay");

//user
define("USER", "root");

//password
define("PASSWORD", "");

$conn = new PDO("mysql: host=" . HOST . ";dbname=" . DBNAME . ";", USER, PASSWORD);
