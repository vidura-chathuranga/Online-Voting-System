<?php

require "config.php";

//checking whether form submited or not
if(isset($_POST['submit'])){

    //array for storing errors
    $errors = array();

    // checking required fields 
    if(empty(trim($_POST['email']))){
        $errors[] = "Email filed is empty";
        header("location:organizerRegister.php?error=Email is required!");
    }

    if(empty(trim($_POST['name']))){
        $errors[] = "Organizer name is required";
        header("location:organizerRegister.php?error=Organizer name is required!");
    }

    if(empty(trim($_POST['phone']))){
        $errors[] = "Phone Number is required";
        header("location:organizerRegister.php?error=phone Number is required!");
    }

    if(empty(trim($_POST['password']))){
        $errors[] = "password is required";
        header("location:organizerRegister.php?error=password is required!");
    }

    if(empty(trim($_POST['address']))){
        $errors[] = "address is required";
        header("location:organizerRegister.php?error=address is required!");
    }

    

    //checking if email address already exist
        //sanitize sql injection
            $email = mysqli_real_escape_string($conn, $_POST['email']);

            $query = "SELECT * FROM organizer WHERE Organizer_Email = '{$email}' LIMIT 1";

            $result_set = mysqli_query($conn, $query);

            if($result_set){
                if(mysqli_num_rows($result_set) == 1){
                    $errors[] = "email address already exist";
                    header("location:organizerRegister.php?error=Email address already exist!");
                }
            }

    //adding user to database
    if(empty($errors)){

        //sanitize sql injection
        //email address already sanitized
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phoneNumber =mysqli_real_escape_string($conn, $_POST['phone']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);

        //password hashing for more security
        $hashed_password = sha1($password);

        $sql = "INSERT INTO organizer(Password, Organizer_name, Phone_Number, Organizer_Email, Address)  VALUES ('{$hashed_password}','{$name}','{$phoneNumber}','{$email}','{$address}')";

        $result = mysqli_query($conn, $sql);

        if($result){
            //if user registered successfully, redirect to home page
            header("location:organizerlogin.php?success=You have been registered Successfully!");
        }else{
            header("organizerRegister.php?error=faild to add the new record");
        }


    }

    
}

?>