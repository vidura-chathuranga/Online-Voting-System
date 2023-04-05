<?php
require "config.php";
session_start();

if(isset($_POST['resetpassword'])){

    $sessionID = $_SESSION['id'];

    $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
    
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['passwordagain']);

    if(strcmp($newpassword, $confirmPassword) == 0){
        
        $hashpassowrd = sha1($confirmPassword);

        $query = "UPDATE organizer SET Password = '{$hashpassowrd}' WHERE Organizer_ID = $sessionID";

        $result = mysqli_query($conn, $query);

        if($result){
            header('location:OrganizerProfile.php?success=Password changed successfully!');
        }else{
            header('location:OrganizerProfile.php?error=Query faild');
        }
    }else{
        header("location:OrganizerProfile.php?error=Password not matching!");
    }
}


?>