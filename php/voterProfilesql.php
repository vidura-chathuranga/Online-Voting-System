<?php

    require "config.php";
    
    session_start();

    //database connection

    if(isset($_POST['save'])){

        

    //array for storing errors
    $errors = array();

    // checking required fields 
    if(empty(trim($_POST['email']))){
        $errors[] = "Email filed is empty";
        header("location:voterprofileEditable.php?error=Email is required!");
    }

    if(empty(trim($_POST['name']))){
        $errors[] = " name is required";
        header("location:voterProfileEditable.php?error=name is required!");
    }

    if(empty(trim($_POST['phone']))){
        $errors[] = "Phone Number is required";
        header("location:voterProfileEditable.php?error=phone Number is required!");
    }


    //getting session ID
    $sessionid = $_SESSION['id'];

    //checking if email address already exist
        //sanitize sql injection
            $email = mysqli_real_escape_string($conn, $_POST['email']);

            $emailquery = "SELECT * FROM voter_form WHERE email = '{$email}' LIMIT 1";

            $result_set = mysqli_query($conn, $emailquery);

            if($result_set){
                if(mysqli_num_rows($result_set) == 1){
                    $errors[] = "email address already exist";
                    header("location:voterProfileEditable.php?error=Email address already exist!");
                }
            }

    //adding user to database
    if(empty($errors)){
        
        $country = $_POST['country'];

        //sanitize sql injection
        //email address already sanitized
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phoneNumber =mysqli_real_escape_string($conn, $_POST['phone']);
        $dob = $_POST['birthday'];


        $sql = "UPDATE voter_form SET  name = '{$name}', contactnum = '{$phoneNumber}' , email = '{$email}', country = '{$country}', dob = '{$dob}' WHERE id = $sessionid";

        $result = mysqli_query($conn, $sql);

        if($result){
            //if user registered successfully, redirect to home page
            header("location:voterprofile.php?success=You have been Updated Successfully!");
        }else{
            header("location:voterprofile.php?error=faild to Update the Profile Details");
        }



    }

}

?>