<!DOCTYPE html>

<html>
    <head>
        <title>My Vote</title>
        </title>

        <link rel="stylesheet" type="text/css" href="../css/voter.css">

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

                                <!-- <input type="image" src="../Images/useraccount.png" width="38px" height="38px" id="profilebtn"> -->
                                
                               
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
                              <input type="text" class="search rounded" placeholder="Search..." style="padding-top:5px;"">
                    </form>
                </li>

                <!-- admin user tab -->
                <li class="menu" ><a href="admin.php" id="adminfloat">Admin Users</a></li>
            </div>

        <br><br><br>

    
                 

        <!-- add here your content -->
        <div class="content">
            <h1 ><u>-Log in  as Voter-</u></h1>

            <hr>

            

            <div class="setpadding">

                <form action ="loginvoter.php" method ="post">

                <?php 

                    if(isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error']; ?></p><?php
    
                    }

                ?>

                    <p class="textbox"> E-mail </p>
                    <input type="text" name="email" class="text" placeholder="Enter Email" />

                    <p class="textbox">Password</p>
                    <input type="password" name="password" class="text" placeholder="Password" />

                    <br><br>

                <div class="a">
                    <a href="fogotpw.php">Forget your Password</a> <br> <br>

                    <input type="checkbox" id="remember" name="remember1" value="Remember me">
                    <label for="remember">Remember me</label><br>
                </div>
                <br><br>
                <input type="submit" name='submit' Value="Login" id="loginsignup">

            </div>   
                <div class="separator">
                    <div class="line"></div>
                    <h5>OR</h5>
                    <div class="line"></div>
                </div>

            <div class ="b">
                <a href ="https://www.facebook.com/"> <img src="../Images/facebookk.jpg"  id="profilebtn" class="imagealign1"> </a>
                <a href ="https://www.google.com/"> <img src="../Images/googleloginn.jpg"  id="profilebtn" class="imagealign2"></a>
            </div>

            <br><br>

            <div class="b">
                <a href="organizerlogin.php">Log in as a Organizer</a>
            </div>
            <br><br>

         <div class="c">
            <a href="voter_register.php"><input type="button" Value="Creat your Account"  id="creataccount" ></a>
                </div>

                
                </form>
            

        </div>
        <br /><br /><br />

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