<?php
require "config.php";

session_start();

if(isset($_POST['resetpassword'])){

    $sessionID = $_SESSION['id'];

    $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
    
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['passwordagain']);

    if(strcmp($newpassword, $confirmPassword) == 0){
        
        $hashpassowrd = sha1($confirmPassword);

        $query = "UPDATE voter_form SET Password = '{$hashpassowrd}' WHERE id = $sessionID";

        $result = mysqli_query($conn, $query);

        if($result){
            header('location:voterprofile.php?success=Password changed successfully!');
        }else{
            header('location:voterprofile.php?error=Query faild');
        }
    }else{
        header("location:voterprofile.php?error=Password not matching!");
    }
}


?>