<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name ="voter_db";

$conn = mysqli_connect($sname , $uname , $password ,$db_name);

if($conn->connect_error){
    echo "<script>alert('Connection failed.')</script>"; 
}
?>