<?php 

require "config.php";
?>

<?php

if (isset($_POST['send'])) {

    $Your_Full_Name= "";
    $Organization = "";
    $Telephone = "";
    $Email = "";
    $Subject = "";
    $Message = "";

    $Your_Full_Name = input_varify($_POST['full_name']);
    $Organization = input_varify($_POST['Organization']);
    $Telephone = input_varify($_POST['Telephone_num']);
    $Email = input_varify($_POST['email']);
    $Subject = input_varify($_POST['subject']);
    $Message = input_varify($_POST['message']);


    $query = "INSERT INTO contactus(full_name, organization, telephone, email, subject, message) VALUES(
    '{$Your_Full_Name}','{$Organization}','{$Telephone}','{$Email}','{$Subject}','{$Message}')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "form sent successfully";
    } else {
        echo mysqli_error($conn);
    }
}

function input_varify($data)
{
    //remove empty space from user inputs
    $data = trim($data);
    //remove blackslash from user inputs
    $data = stripslashes($data);
    //remove special chars to html entities
    $data = htmlspecialchars($data);

    return $data;
}


?>

<!DOCTYPE html>

<html>
    <head>
        <title>My Vote</title>
        

        <link rel="stylesheet" type="text/css" href="../css/contact.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link footer social links -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- link java script file -->
        <script src="js/index.js"></script>

        <!-- google font imported -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">


    </head>

    <body>
        
       <div class="headerrow" >
           <!-- null for deviding screen 3 -->
           <div class="heading-cols">

           </div>
                <!-- Logo and heading -->
                <div class="heading-cols">
                    <center>
                        <img src="../Images/myvote.png"  alt="My vote page logo" class="logo"><br>

                        <h1 id="myvoteheading">My Vote</h1>
                        
                        <h3 id="myvotesubheading">- Online Voting System -</h3>
                    </center>
                    
                    
                </div>

                    <div class="heading-cols" >
                        <div style="float:right;">
                            
                                <a href="voter_register.php"><button name="Sign Up" Value="Sign Up" id="loginsignup"><b>Sign Up</b></button> </a>
                                
                               <a href="voter_login.php"> <button name="Login" Value="Login" id="loginsignup"><b>Login</b></button> </a>                           

                                <input type="image" src="../Images/useraccount.png" width="38px" height="38px" id="profilebtn">
                                
                               
                        </div> 
                        
                        
                        
                    </div>

                    
         </div>
            
        

        <!-- Nagvigation Bar -->
        
            <div class="nav">
                <li class="menu"><a href="home.php" class="active">Home</a></li>
                <li class="menu"><a href="about_us.php">About Us</a></li>
                <li class="menu"><a href="category.php">Category</a></li>
                <li class="menu"><a href="contact_us.php">Contact Us</a></li>
                <!-- add Search bar-->
                <li class="menu">
                    <form class="searchform">
                         <span>
                              <input type="text" class="search rounded" placeholder="Search..." style="padding-top:5px;"">
                    </form>
                </li>

                <!-- admin user tab -->
                <li class="menu" "><a href="admin.php" id="adminfloat">Admin Users</a></li>
            </div>
                

        <!-- add here your content -->
        <div class="contact_box">
            <form action="contact_us.php" method="post">
            <h1>Contact Us</h1>
            <p>Your Full Name(required)</p>
            <input type="text" name="full_name" required>
            <p>Organization</p>
            <input type="text" name="Organization">
            <p>Telephone(required)</p>
            <input type="tel" name="Telephone_num" required>
            <p>Email(required)</p>
            <input type="email" name="email" required>
            <p>Subject(required)</p>
            <input type="subject" name="subject" required>
            <p>Message(required)</p>
            <textarea rows="4" cols="30" name="message" required></textarea>
            <br>
            <button type="send" name="send">Send</button>
</form>
        </div>
        

        <!-- Footer below -->
        <footer>
            <div class="row">
                <div class="footer-cols"  style="text-align:left; margin-top:40px;">
                    <a href="mailto:myvote@gmail.com" style="text-decoration:none;color:white;">Mail: myvote@gmail.com</a>
                </div>

                    <div class="footer-cols">
                        <h4 style="margin-top:8px;margin-bottom: 8px; font-size: 18px;">Follow Us</h4>
                        <div class="scociallinks">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>

                        </div>
                        
                        
                    </div>

                        <div class="footer-cols">
                                <img src="../Images/copyright.png" hight="50px" width="150px" align="right" style="margin-top:12px;">
                        </div>             
                </div>
           
        </footer>

    </body>
</html>