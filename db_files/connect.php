<?php

require_once('config.php');
// $conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
// echo('yup');
// if ($conn->connect_error) die($conn->connect_error);




/*
// MYSQLI VERSION
function connectDB(){
    $link = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

    if ($link->connect_error) {
        die("Connection Failed: " . $link->connect_error);
    }
    return $link;

}
*/

// PDO VERSION

function connectDB(){
	try {
	    $link = new PDO('mysql:host=localhost;dbname=gotcha', root, '');
	    foreach($link->query('SELECT * FROM test ') as $row) {
	        
	        echo 'one: ' . $row[ 'one' ] . '<br>';
	        echo 'two: ' . $row[ 'two' ] . '<br>';
	        echo 'three: ' . $row[ 'three' ] . '<br>';
	        echo 'four: ' . $row[ 'four' ] . '<br>';
	        print_r($row);
	    }
	    $link = null;
	} 
	catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
}

?>