
<?php

require "config.php";

    session_start();

    if(!isset($_SESSION['id'])){
        header('home.php?error=User not registered successfully');
    }

?>
<!DOCTYPE html>

<html>

<head>
    <title>Voting System</title>
    </title>

    <link rel="stylesheet" type="text/css" href="../css/votestyle.css">

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

            <a href="voterprofile.php"><input type="image" src="../Images/useraccount.png" width="38px" height="38px" id="profilebtn"></a><br>

            <div>
                <a href="logout.php"><button name="logout" Value="Log Out" id="loginsignup"><b>Log Out</b></button></a> 
            </div>


            </div>



        </div>


    </div>



    <!-- Nagvigation Bar -->

    <div class="nav">
        <li class="menu"><a href="index_v.php" class="active">Home</a></li>
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
                <li class=" menu" ><a href="" id=" adminfloat">Admin Users</a>
        </li>
    </div>


    <!-- content -->
    <div style="background: black; color:white; text-align:center; width:100%;  padding:7px; font-family:comic sans ms;">
        <h2>Vote for your favourite player</h2>
    </div>
    <div class="container">
        <form action="voting.php" method="post" align="center">
            <img class="img1" src="../Images/messi.jpg" width="350" height="250"  />
            <img class="img1" src="../Images/ronaldo.jpg" width="350" height="250" />
            <img class="img1" src="../Images/drogba.jpg" width="350" height="250" />
            <center>
                <input class="intvote" type="submit" name="messi" value="Vote for Messi" />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <input class="intvote" type="submit" name="ronaldo" value="Vote for Ronaldo" />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <input class="intvote" type="submit" name="drogba" value="Vote for Drogba" />


            </center>
        </form>
        <?php

        require "config.php";

        $messi = "";
        $per_messi = "";
        $ronaldo = "";
        $per_ronaldo = "";
        $drogba = "";
        $per_drogba = "";

        if (isset($_POST['messi'])) {

            $messi = "";
            $per_messi = "";
            $ronaldo = "";
            $per_ronaldo = "";
            $drogba = "";
            $per_drogba = "";


            $vote_messi = "update votes set messi=messi+1";
            $run_messi = mysqli_query($conn, $vote_messi);

            if ($run_messi) {
                echo "<h2 align='center'> Your vote has been cast for lionel messi!</h2>";
                echo "<h2 align='center'><a href='voting.php?results'>View Results</a></h2>";
            }
        }

        if (isset($_POST['ronaldo'])) {
            $messi = "";
            $per_messi = "";
            $ronaldo = "";
            $per_ronaldo = "";
            $drogba = "";
            $per_drogba = "";

            $vote_ronaldo = "update votes set ronaldo=ronaldo+1";
            $run_ronaldo = mysqli_query($conn, $vote_ronaldo);

            if ($run_ronaldo) {
                echo "<h2 align='center'> Your vote has been cast for Cristiano Ronaldo!</h2>";
                echo "<h2 align='center'><a href='voting.php?results'>View Results</a></h2>";
            }
        }

        if (isset($_POST['drogba'])) {
            $messi = "";
            $per_messi = "";
            $ronaldo = "";
            $per_ronaldo = "";
            $drogba = "";
            $per_drogba = "";

            $vote_drogba = "update votes set drogba=drogba+1";
            $run_drogba = mysqli_query($conn, $vote_drogba);

            if ($run_drogba) {
                echo "<h2 align='center'> Your vote has been cast for Didier Drogba!</h2>";
                echo "<h2 align='center'><a href='voting.php?results'>View Results</a></h2>";
            }
        }

        //new section started 
        if (isset($_GET['results'])) {
            $get_votes = "select* from votes";
            $run_votes = mysqli_query($conn, $get_votes);
            $row_votes = mysqli_fetch_array($run_votes);

            $messi = $row_votes['messi'];
            $ronaldo = $row_votes['ronaldo'];
            $drogba = $row_votes['drogba'];

            $count = $messi + $ronaldo + $drogba;

            $per_messi = round($messi * 100 / $count) . "%";
            $per_ronaldo = round($ronaldo * 100 / $count) . "%";
            $per_drogba = round($drogba * 100 / $count) . "%";
        }
        echo "
            <div style='background:orange'; padding : 10px; text-align:center;>
            <center>
             <h2>Updated Results:</h2>
             <p style='background:#595959; color:white; padding:10px; width=500px;'>
             <b>Lionel Messi: </b> $messi ($per_messi)
             </p>

             <p style='background:#595959; color:white; padding:10px; width=500px;'>
             <b>Cristiano Ronaldo: </b> $ronaldo ($per_ronaldo)
             </p>

             <p style='background:#595959; color:white; padding:10px; width=500px;'>
             <b>Didier Drogba : </b> $drogba ($per_drogba)
             </p>

</center>
            </div>
            
            
            
            ";

        ?>

    </div>
    <!-- <div style="background: black; color:white; text-align:center; width:100%;  padding:7px; font-family:comic sans ms;">
        <h3>
            www.myvote.com
        </h3>
    </div> -->
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