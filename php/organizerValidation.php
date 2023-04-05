<?php
    require "config.php";
    session_start();
    

    if(isset($_POST['submit'])){

        $errors = array();

        if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
            $errors[] = "Email is missing / invalid";
            header('location:organizerlogin.php?error=Email is missing / invalid');
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
            $errors[] = "password is missing / invalid";
            header('location:organizerlogin.php?error=Password is missing / invalid');
        }

        if(empty($errors)){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $hashed_password = sha1($password);

            $query = "SELECT * FROM organizer WHERE Organizer_Email = '{$email}' AND Password = '{$hashed_password}' LIMIT 1";

            $result = mysqli_query($conn, $query);

            if($result){
                
                if(mysqli_num_rows($result) == 1){

                    $user = mysqli_fetch_assoc($result);

                    $_SESSION['user_name'] = $user['Organizer_name'];

                    $_SESSION['id'] = $user['Organizer_ID'];

                    header('location:index_o.php');
                }else{
                    $errors = "Invalid Email/ password";
                    header('location:organizerlogin.php?error=Invalid email/ password');
                }
            }else{
                $errors = "database query faild";
                header('location:organizerlogin.php?error=database query faild');
            }
        }


}       

        

?>

