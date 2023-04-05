<!DOCTYPE html>

<html>
    <head>
        <title>My Vote</title>
        

        <link rel="stylesheet" type="text/css" href="../css/about_us.css">
        <script src="voter.js"></script>

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
            
        

        <!-- Nagvigation Bar -->
        
            <div class="nav">
                <li class="menu"><a href="home.php" class="active">Home</a></li>
                <li class="menu"><a href="about_us">About Us</a></li>
                <li class="menu"><a href="category.php">Category</a></li>
                <li class="menu"><a href="contact_us">Contact Us</a></li>
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
        <center><h2>About Us</h2>
        <p>MyVote is operated by MIT Technologies(pvt)ltd .We are currently a small team in Colombo, Sri Lanka but reach the whole world with our voting system. </p>
        </center>
        <div class="row">
            <div class="cols" id="cols1" style="margin-right:25px; margin-left:35px;">
                <h3>Our Approch</h3>
               <p>MyVote is a platform where anyone can register as an organizer or an user. We help our organizers to find out the majority opinion of a group as easily and reliably as possible, no matter how large the number of participants is. It will help the users to select or vote for anyone/anything smoothly.
                . We expand our service through out the country and as well as we are looking to expand our services internationally.</p>
            </div>
                
            <div class="cols" id="cols2" style="margin-right:25px;">
                <h3>Our Mission</h3>
                <p> Our mission is to make interaction in larger groups as easy as possible. To achieve this, we build voting tools that everyone can easily participate in. We value reliability, precision and fast work and don't need complicated structures in the company. This allows us to work in a very agile way and implement new ideas quickly and easily.</p>
            </div>
                
            <div class="cols" id="cols3" style="margin-right:25px;">
                <h3>Our Team</h3>
                <p>In our team, there are  qualified software engineers, web developers and security administrators who are very keen to help you out.</p>
            </div>
                
            <div class="cols" id="cols4" style="margin-right:25px;">
                <h3>Our Work</h3>
                <p>We provide our services primarily in the fields of sports, science and the arts. We have provided to our country as well as internationally and you can contact us from anywhere.</p>
            </div>
        </div>
        
        <div class="row" style="margin-top:50px;">
 
            <div style="width:37%; margin-top: 20px;" id="piechart">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
                  <script type="text/javascript">
                  // Load google charts
                 google.charts.load('current', {'packages':['corechart']});
                 google.charts.setOnLoadCallback(drawChart);
        
                  // Draw the chart and set the chart values
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Task', 'Reviews'],
                ['Accuracy', 5],
                ['Transparency', 4],
                ['well planed architecture', 4],
                ['User Friendly', 4],
                ['Accessability', 2],
              ]);
        
                // Optional; add a title and set the width and height of the chart
                var options = {'title':'Customer reviews about our website', 'width':550, 'height':400};
        
                  // Display the chart inside the <div> element with id="piechart"
                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                 chart.draw(data, options);
          }

            </script>  

            </div>
                
            <div style="width:25%">
                <p class="ex1"><b>Total Users</b></p>
                <br>
                <p class="ex2"><b>10k+</b></p>
            </div>

            <div style="width:35%">
                <center><p class="ex1"><b>Total Award Nomination </b><br><b>Programs</b></p></center>
                <center><p class="ex2"><b>100k+</b></p></center>
            </div>
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