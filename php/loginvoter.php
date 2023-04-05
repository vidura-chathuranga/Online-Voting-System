<?php
    require "config.php";

    session_start();

    if(isset($_POST['submit'])){

        $errors = array();

        if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
            $errors[] = "email is missing / invalid";
            header('location:voter_login.php?error="username is missing / invalid"');
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
            $errors[] = "password is missing / invalid";
            header('location:voter_login.php?error="password is missing / invalid"');
        }

        if(empty($errors)){
            $email = mysqli_real_escape_string($conn, $_POST['email']);

            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $hashed_password = sha1($password);

            $query = "SELECT * FROM voter_form WHERE email = '{$email}' AND password = '{$hashed_password}' LIMIT 1";

            $result = mysqli_query($conn, $query);

            if($result){
                
                if(mysqli_num_rows($result) == 1){

                    $user = mysqli_fetch_assoc($result);

                    $_SESSION['user_name'] = $user['name'];

                    $_SESSION['id'] = $user['id'];

                    header('location:index_v.php');

                }else{
                    $errors = "Invalid username/ password";
                    echo "<script> alert('Invalid email/password.')</script>";
                    header('location:voter_login.php?error="Invalid email/ password"');
                }
            }else{
                $errors = "database query faild";
                header('location:voter_login.php?error="database query faild"');
            }
        }


}       

        



?>

