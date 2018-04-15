<?php

require_once('config.php');
// $conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
// echo('yup');
// if ($conn->connect_error) die($conn->connect_error);
function connectDB(){
    $link = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
	


    if ($link->connect_error) {
        die("Connection Failed: " . $link->connect_error);
    }
    return $link;

}


?>