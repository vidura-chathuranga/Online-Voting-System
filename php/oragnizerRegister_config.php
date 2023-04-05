<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name ="web_page";

$conn = mysqli_connect($sname , $uname , $password ,$db_name);

if($conn->connect_error){
    echo "Connection failed"; 
} 