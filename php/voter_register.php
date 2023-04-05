<?php 
require "config.php";
?>

<?php

if (isset($_POST['submit'])) {

    $email = "";
    $name = "";
    $phone = "";
    $password = "";

    $email = input_varify($_POST['email']);
    $name = input_varify($_POST['name']);
    $phone = input_varify($_POST['phone']);
    $password = input_varify($_POST['password']);

    $hashedpassword = sha1($password);

    $query = "INSERT INTO voter_form(email,name,contactnum,password) VALUES(
    '{$email}','{$name}','{$phone}','{$hashedpassword}')";

    $result = mysqli_query($conn, $query);

    if ($result) {

         header('location:voter_login.php?success=form sent successfully');
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



// $conn = mysqli_connect('localhost', 'root', '', 'voter_db') or die('connection failed');
?>

<!DOCTYPE html>
<html>

<head>
    <title>voter registration Page</title>
    <link rel="stylesheet" type="text/css" href="../css/voter_register.css">

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
    <div class="headerrow">
        <!-- null for deviding screen 3 -->
        <div class="heading-cols">

        </div>
        <!-- Logo and heading -->
        <div class="heading-cols">
            <center>
                <img src="../Images/myvote.png" alt="My vote page logo" class="logo"><br>

                <h1 id="myvoteheading">My Vote</h1>

                <h3 id="myvotesubheading">- Online Voting System -</h3>
            </center>


        </div>

        <div class="heading-cols">
            <div style="float:right;">

                <button name="Sign Up" Value="Sign Up" id="loginsignup"><b>Sign Up</b></button>

               <a href="voter_login.php"> <button name="Login" Value="Login" id="loginsignup"><b>Login</b></button> </a>

                <input type="image" src="../Images/useraccount.png" width="38px" height="38px" id="profilebtn">
            </div>
        </div>
    </div>

    <!-- Nagvigation Bar -->

    <div class="nav">
        <li class="menu"><a href="home.php" class="active">Home</a></li>
        <li class="menu"><a href="">About Us</a></li>
        <li class="menu"><a href="category.php">Category</a></li>
        <li class="menu"><a href="contact_us.php">Contact Us</a></li>
        <!-- add Search bar-->
        <li class="menu">
            <form class="searchform">
                <span>
                    <input type="text" class="search rounded" placeholder="Search..." style="padding-top:5px;">
            </form>
        </li>

        <!-- admin user tab -->
        <li class=" menu"><a href="admin.php" id=" adminfloat">Admin Users</a>
        </li>
    </div>
    

    <!-- voter registration page -->

    <center>
        <div class="card-body">
            <h2>-As a Voter-</h2><br>
        </div>
        <div class="card-body">
            <form action="voter_register.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" class="form-control" name="email" /><br><br>
                </div>
                <div class="form-group">
                    <label for="name">Full Name</label><br>
                    <input type="name" id="name" class="form-control" name="name" /><br><br>
                </div>
                <div class="form-group">
                    <label for="phone">Contact No</label><br>
                    <input type="phone" id="phone" class="form-control" name="phone" /><br><br>
                </div>
                <div class="form-group">
                    <label for="pass">Enter Password</label><br>
                    <input type="password" id="password" class="form-control" name="password" /><br><br>
                </div>
                <input type="submit" class="btn1" value="Sign Up" name="submit" /><br><br>
            </form>
            <div style="float:left; width: 44%;">
                <hr />
            </div>
            <div style="float:right; width: 44%;">
                <hr />
            </div>
            or <br><br>
            <a href="http://facebook.com">
                <input type="submit" class="btn2" value="Sign in with Facebook" name="" /></a>
            <a href="http://google.com">
                <input type="submit" class="btn3" value="Sign in with Google+" name="" /></a>
            <p><a href="organizerRegister.php">Register as an Organizer</a></p>

            <br><br>

            <div class="b">
                <p style="opacity:0.3;"><i>Already Registered ?</i></p>
                <a href="voter_login.php">Log in as a Voter</a>
            </div>
            <br><br>

        </div>
    </center>

    <br><br>

    <!-- Footer below -->
    <footer>
        <div class="row">
            <div class="footer-cols" style="text-align:left; margin-top:40px;">
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