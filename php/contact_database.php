<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_us';

$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error)
{
    echo "connection error: ". $conn->connect_error;
}
// else
// {
// 	echo"Great work";
// }


?>