<?php 
    session_start();
    require "config.php";
?>
<?php 
    //checking if user loged in to the system


    if(!isset($_SESSION['id'])){
        header("location:home.php");
    }

    
?>

<!DOCTYPE html>

<html>

<head>
    <title>Admin profile</title>
    </title>

    <link rel="stylesheet" type="text/css" href="../css/admin_profile.css">

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

                <span class="loginName"> Welcome <?php echo $_SESSION['user_name']; ?> !</span>

                <a href="organizerProfile.php"><input type="image" src="../Images/useraccount.png" width="38px" height="38px" id="profilebtn"></a><br>

                <div>
                     <a href="logout.php"><button name="logout" Value="Log Out" id="loginsignup"><b>Log Out</b></button></a> 
                </div>  


            </div>
        </div>
    </div>

    <!-- Nagvigation Bar -->

    <div class="nav">

        <ul>
            <span>
                <li class="menu"><a href="index_A.php" class="active">Home</a></li>
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
            </span>
        </ul>

    </div>



    <h1 style="margin-left :10px;"> Admin,</h1>
    <h3 style="margin-left :10px"><?php echo $_SESSION['id']?></h3>
    <hr>
    <br><br><br>

    <div class="row1" style="margin-bottom:20px;">
        <div class="bodycols" style="margin-top:55px;">

            <table style="width:100%">
                <tr>
                    <th>Inquiry ID</th>
                    <th>Description</th>
                    <th>Category</th>
                </tr>
                <tr>
                    <td>MV90876</td>
                    <td>Champions League 2022</td>
                    <td>Sports</td>
                </tr>
                <tr>
                    <td>MV90145</td>
                    <td>MTV Movie Awards 2022</td>
                    <td>film industry</td>
                </tr>
                <tr>
                    <td>MV90528</td>
                    <td>Echo Awards</td>
                    <td>Music industry</td>
                </tr>
                <tr>
                    <td>MV90713</td>
                    <td>TITAN Business Awards 2022</td>
                    <td>Business</td>
                </tr>

            </table>
        </div>
        <div class="bodycols" style="margin-left:40px;">

            <div>
                <center>
                    <p class="imgheading">Details of the Voting Program</p>
                </center>

            </div>

            <div>
                <center>
                    <img class="img1" src="../images/piechart.jpg" alt="piechart">
                </center>

            </div>
        </div>

        <div style="width:15%; margin-left :35px;list-style-type:square;padding-top:150px;">

            <ul style="list-style-type:square;margin-bottom:50px;font-size:16px;">
                <li style="margin-bottom:10px;">Sport</li>
                <li style="margin-bottom:10px;">Film Industry</li>
                <li style="margin-bottom:10px;">Influencers</li>
                <li style="margin-bottom:10px;">Researchers</li>
                <li style="margin-bottom:10px;">Music industry</li>
            </ul>
        </div>

    </div>
    <div style="margin-left :35px;">
        <h2 class=" note">Add Special Note</h2>
    </div>
    <center>

        <textarea rows="6" cols="150" name="comment" form="usrform">
</textarea>

    </center>


    <br><br>




    <!-- Footer below -->
    <footer>
        <div class=" row">
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