<!DOCTYPE html>

<html>
    <head>
        <title>My Vote</title>
        </title>

        <link rel="stylesheet" type="text/css" href="../css/category.css">

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
                            
                                <button name="Sign Up" Value="Sign Up" id="loginsignup"><b>Sign Up</b></button>
                                
                                <button name="Login" Value="Login" id="loginsignup"><b>Login</b></button>                            

                                <input type="image" src="../Images/useraccount.png" width="38px" height="38px" id="profilebtn">
                                
                               
                        </div> 
                        
                        
                        
                    </div>

                    
         </div>
        
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

        <br>


    


<!-- add here your content -->
    


<?php include 'sports.php'; ?>
<?php include 'influencers.php'; ?>
<?php include 'researchers.php'; ?>
<?php include 'music_industry.php'; ?>
<?php include 'film_industry.php'; ?>



<script>
        function myFunction() {
  var x = document.getElementById("topnav");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("button-m").innerHTML = "Hide Menu";
  } else {
    document.getElementById("button-m").innerHTML = "Show Menu";
    x.style.display = "none";
  }
};
</script>
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
</body>
</html>