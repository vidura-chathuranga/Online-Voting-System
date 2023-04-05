<?php
    session_start();

    require "config.php";

    if(isset($_POST['submit'])){

        $errors = array();

        if(!isset($_POST['username']) || strlen(trim($_POST['username'])) < 1){
            $error[] = "User name is missing or invaild";
            header('location:admin.php?error= User name is missing / invalid');
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
            $errors[] = "password is missing / invalid";
            header('location:admin.php?error=Password is missing / invalid');
        }

        if(!isset($_POST['id']) || strlen(trim($_POST['id'])) < 1){
            $errors[] = "Company ID is missing / invaild";
            header('location:admin.php?error=Company ID is missing / invaild');
        }

        if(empty($errors)){
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $hashed_password = sha1($password);
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            

            $query = "SELECT * FROM admin WHERE user_name = '{$username}' AND password = '{$password}' AND company_id = '{$id}' LIMIT 1";

            $result = mysqli_query($conn, $query);

            if($result){                                                                                                                                                                                                           
                
                if(mysqli_num_rows($result) == 1){

                    $user = mysqli_fetch_assoc($result);

                    $_SESSION['id'] = $user['company_id'];
                    $_SESSION['user_name'] = $user['user_name'];

                    header('location:index_A.php');
                }else{
                    $errors = "Invalid username/ password / company id";
                    header('location:admin.php?error=Invalid username/ password / company id');
                }
            }else{
                $errors = "database query faild";
                header('location:admin.php?error=database query faild');
            }
        }

    }

    ?>