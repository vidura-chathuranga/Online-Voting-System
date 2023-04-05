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
        header("location:organizerProfileEditable.php?error=Email is required!");
    }

    if(empty(trim($_POST['organizationName']))){
        $errors[] = "organization Name name is required";
        header("location:organizerProfileEditable.php?error=Organizer name is required!");
    }

    if(empty(trim($_POST['phone']))){
        $errors[] = "Phone Number is required";
        header("location:organizerProfileEditable.php?error=phone Number is required!");
    }


    if(empty(trim($_POST['orgAddress']))){
        $errors[] = "Organization Address is required";
        header("location:organizerProfileEditable.php?error=address is required!");
    }

    //getting session ID
    $sessionid = $_SESSION['id'];

    //checking if email address already exist
        //sanitize sql injection
            $email = mysqli_real_escape_string($conn, $_POST['email']);

            $emailquery = "SELECT * FROM organizer WHERE Organizer_Email = '{$email}' LIMIT 1";

            $result_set = mysqli_query($conn, $emailquery);

            if($result_set){
                if(mysqli_num_rows($result_set) == 1){
                    $errors[] = "email address already exist";
                    header("location:organizerProfileEditable.php?error=Email address already exist!");
                }
            }

    //adding user to database
    if(empty($errors)){
        
        $country = $_POST['country'];

        //sanitize sql injection
        //email address already sanitized
        $Oname = mysqli_real_escape_string($conn, $_POST['organizationName']);
        $phoneNumber =mysqli_real_escape_string($conn, $_POST['phone']);
        $address = mysqli_real_escape_string($conn, $_POST['orgAddress']);


        $sql = "UPDATE organizer SET Organizer_name = '{$Oname}', Phone_Number = '{$phoneNumber}' , Organizer_Email = '{$email}', Address = '{$address}', Country = '{$country}' WHERE Organizer_ID = $sessionid";

        $result = mysqli_query($conn, $sql);

        if($result){
            //if user registered successfully, redirect to home page
            header("location:OrganizerProfile.php?success=You have been Updated Successfully!");
        }else{
            header("location:OrganizerProfile.php?error=faild to Update the Profile Details");
        }



    }

}

?>