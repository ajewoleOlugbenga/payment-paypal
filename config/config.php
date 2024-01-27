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

if ($conn == true) {
    echo "connection is successful";
} else {
    echo "error";
}
