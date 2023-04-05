<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    echo "Connect error: ".$conn->connect_error;
}


?>