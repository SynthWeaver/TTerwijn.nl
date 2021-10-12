<?php

include_once 'private/classes/Domain.php';

if(isOnline()){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DB4145287";
}else{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DB4145287";
}

// Create connection
$conn = @ new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<br> <h1>ERROR 500! <br><br> Database connection went wrong, please try again later.</h1>");
}
