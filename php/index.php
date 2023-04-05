<?php 
    session_start();
    require "database_con.php";
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
        <title>My Vote</title>
        </title>

        <link rel="stylesheet" type="text/css" href="../css/index.css">

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
                        <img src="../Images/myvote.png" alt="My vote page logo" class="logo"><br>

                        <h1 id="myvoteheading">My Vote</h1>
                        
                        <h3 id="myvotesubheading">- Online Voting System -</h3>
                    </center>
                    
                    
                </div>

                    <div class="heading-cols" >
                        <div style="float:right;">
                            
                                <!-- <button name="Sign Up" Value="Sign Up" id="loginsignup"><b>Sign Up</b></button>
                                
                                <button name="Login" Value="Login" id="loginsignup"><b>Login</b></button>                             -->
                                
                                
                                <span class="loginName"> Welcome <?php echo $_SESSION['user_name']; ?> !</span>

                                <a href="#"><input type="image" src="../Images/useraccount.png" width="38px" height="38px" id="profilebtn"></a><br>

                                <div>
                                 <a href="logout.php"><button name="logout" Value="Log Out" id="loginsignup"><b>Log Out</b></button></a> 
                                </div>
                                  
                               
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
                              <input type="text" class="search rounded" placeholder="Search..." style="padding-top:5px;">
                         </span>
                    </form>
                </li>

                <!-- admin user tab -->
                <li class="menu"><a href="admin.php" id="adminfloat">Admin Users</a></li>
            </div>

        <!-- add here your content -->


        
        <!-- Banners of front page -->
        <div class="bodyrow">

            <!-- banner1 -->
            <div class="bodycols">
                <img src="../Images/awardBanner1.webp" alt="music award program" class="banner">

                <!-- vote now button -->
                <div>
                    <center>
                        <a href="#" style="text-decoration:none; color:rgb(0, 0, 0);"><button type="Button" class="votebtn"><b>VOTE NOW !</b></a></button>
                    </center>
                    
                </div>
            </div>

            <!-- banner 2 -->
            <div class="bodycols">
                <img src="../Images/awardbanner2.webp" alt="drama award program" class="banner">

                <!-- vote now button -->
                <div>
                    <center>
                        <a href="#" style="text-decoration:none; color:rgb(0, 0, 0);"><button type="Button" class="votebtn"><b>VOTE NOW !</b></a></button>
                    </center>
                    
                </div>
            </div>

            <!-- banner3 -->
            <div  class="bodycols">

                <img src="../Images/banner3.jpg" alt="science award program" class="banner">

                <!-- vote now button -->
                <div>
                    <center>
                        <a href="#" style="text-decoration:none; color:rgb(0, 0, 0);"><button type="Button" class="votebtn"><b>VOTE NOW !</b></a></button>
                    </center>
                    
                </div>
            </div>
        </div>    

        <!-- 2nd row -->
        <div class="bodyrow" style="margin-top:35px;">

            <!-- banner4 -->
            <div class="bodycols">
                <img src="../Images/banner4.png" alt="music award program" class="banner">

                <!-- vote now button -->
                <div>
                    <center>
                        <a href="#" style="text-decoration:none; color:rgb(0, 0, 0);"><button type="Button" class="votebtn"><b>VOTE NOW !</b></a></button>
                    </center>
                    
                </div>
            </div>

            <!-- banner 5 -->
            <div class="bodycols">
                <img src="../Images/banner5.jpg" alt="drama award program" class="banner">

                <!-- vote now button -->
                <div>
                    <center>
                        <a href="#" style="text-decoration:none; color:rgb(0, 0, 0);"><button type="Button" class="votebtn"><b>VOTE NOW !</b></a></button>
                    </center>
                    
                </div>
            </div>

            <!-- banner6 -->
            <div  class="bodycols">

                <img src="../Images/banner6.jpg" alt="science award program" class="banner">

                <!-- vote now button -->
                <div style="margin-bottom:50px;">
                    <center>
                        <a href="#" style="text-decoration:none; color:rgb(0, 0, 0);"><button type="Button" class="votebtn"><b>VOTE NOW !</b></a></button>
                    </center>
                    
                </div>
            </div>
        </div>



        <!-- Weclome text and its description -->

        <div >
            <div class="homewelcome">
                <b>Welcome !</b>
            </div>
            <div class="row">
                <div class="homewelcomedes"></div>

                <div class="homewelcomedes">
                <p style="margin-bottom:50px;"><i>Welcome to My Vote! We're so glad you're here!</i></p>
                </div>
                <div class="homewelcomedes"></div>
                
            </div>
            
        </div>



        <!-- Register body button
        <div style="margin-top:50px;">

            <center>
                <button type="button" style="padding:15px 20px 15px 20px; background-color: black; color: white;font-size: 15px;"><b>Register Now</b></button>
             </center>
        </div>

         as a voter & as an organizer -->
        <!-- <div class="row">

            <div class="bottomRegisterBtn">
                <a href="organizerRegister.php" ><button type="button" id="signuporganizerbutton"><span>Try as Organizer</span></button></a>
            </div>

            <div class="bottomRegisterBtn">
                <a href="#" style="text-decoration:none"><button type="button" id="signupvoterbtn"><span>Try as Voter</span></button></a>
            </div>

        </div> --> 



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