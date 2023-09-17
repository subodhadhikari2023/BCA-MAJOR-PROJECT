<?php

//create variables to store the value of host, user, password and port number
$host = "localhost";
$user = "root";
// $password = "Frpsxwhu2001@";
// $database = "details";
$database = "";
$password = "";
$port = "3306";


//Establishing the connection
$conn = mysqli_connect($host, $user, $password,$database, $port);
// Validating the connection
// if(!$conn)
// die ('Cant connect');
// else 
// echo "connected";

//creating the database ?! exists
$query = "CREATE DATABASE IF NOT EXISTS clinic";

mysqli_query($conn,$query);
// Selecting the database
mysqli_select_db($conn,"clinic");

// Creating the table
$query = "CREATE TABLE IF NOT EXISTS registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    habitat VARCHAR(100) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

mysqli_query($conn,$query);  


?>

