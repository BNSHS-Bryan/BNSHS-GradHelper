<!DOCTYPE html>
<html lang="en">
<head>
<title>BNSHS GradHelper</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="header.css">
<?php
	session_start();
	if(!ISSET($_SESSION['userID'])){
		header('location:index.php');
	}
?>
</head>
    <div class="header">
        <a href="index.php" class="logo">BNSHS GradHelper ADMIN</a>
        <div class="header-right">
          <a class="active" href="#home">Home</a>
          <a href="profile.php">Profile</a>
          <a href="#about">Records</a>
          <a href="#about">Reviewers</a>
          <a href="logout.php">Logout</a>
        </div>
      </div>
    <!-- Start of Body-->
    <?php
				require'users/connection.php';


				$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `userID`='$_SESSION[userID]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
 
				echo "<h2 class='text-success'>Welcome, ".$fetch['name']."</h2>";
			?>

<div class="title"><br>Our Recommended Schools</div>
    
<div class="services">

        <div class="box">
            <a class="info" href="info/dlsu_content.html"> 
                <div class="card" id="dlsu" >
                 <h1>De La Salle University</h1>
                 <h2 class="school">De La Salle University</h2>
                    <div class="content">
                    <p><br>De La Salle University positions itself as a leader
                    in molding human resources who serve the church and the nation. 
                    It is a Catholic coeducational institution founded in 1911 by the Brothers of the Christian Schools. 
                    The University is a hub for higher education training renowned for its academic excellence, prolific 
                    and relevant research, and involved community service.
                    <br><br><br><br>Click for more info!</p>
                    </div>
            </div>
         </a>
       </div>
       <div class="box">
           <a class="info" href="info/up_content.html">
                <div class="card" id="up">
                 <h1>University of the Philippines</h1>
                 <h2 class="school">University of the Philippines</h2>
                <div class="content">
                <p>The University of the Philippines (UP) is the country’s national university. 
                    This premier institution of higher learning was established in 1908 and is 
                    now a university system composed of eight constituent universities located in 17 campuses all over the archipelago.
                    As of 2020, the Commission on Higher Education has declared 41 units of the university as Centers of Excellence; 
                    while 5 units have been declared as Centers of Development.<br><br><br>Click for more info!</p>
                
                </div>
        </div>
        </a>
   </div>
   <div class="box">
    <a class="info" href="info/ust_content.html">
    <div class="card" id="ust">
         <h1>University of Santo Thomas</h1>
         <h2 class="school">University of Santo Thomas</h2>
            <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
    </div>
    </a>
    </div>
</div>
<div class="services">
     
    <div class="box">
        <a class="info" href="info/admu_content.html">
        <div class="card" id="admu">
             <h1>Ateneo de Manila University</h1>
             <h2 class="school">Ateneo de Manila University</h2>
                <div class="content">
                <p>Ateneo's Motto, "Lux in Domino".<br>
                    To be "light in the Lord" in all fullness demands moving insistently and deliberately towards God 
                    as the center of a person's life, identifying the issues that such a centering poses, and then 
                    moving out to the world to find ever new ways of constructing the edifice, cultivating the garden, 
                    painting the masterpiece, that God is unfolding in one's life.<br><br><br><br>Click for more info!</p>                
                </div>
        </div>
        </a>
   </div>
   <div class="box">
        <a class="info" href="info/pup_content.html">
        <div class="card" id="pup">
         <h1>Polytechnic University of the Philippines</h1>
         <h2 class="school">Polytechnic University of the Philippines</h2>
            <div class="content">
            <p>The Polytechnic University of the Philippines (PUP) is a government educational institution governed by 
                Republic Act Number 8292.
                PUP is one of the country's highly competent educational institutions. The PUP Community is composed of the Board of Regents, 
                University Officials, Administrative and Academic Personnel, Students, various Organizations, and the Alumni.<br><br><br> Click for more info!</p>
            </div>
        </div>
        </a>
</div>
    <div class="box">
        <a class="info" href="info/olfu_contetnt.,html">
        <div class="card" id="olfu">
         <h1>Our Lady of Fatima University</h1>
         <h2 class="school">Our Lady of Fatima University</h2>
            <div class="content">
            <p>Our Lady of Fatima University has become one of the most respected and admired educational institutions in the country today both 
                in the field of paramedical such as Medicine, Pharmacy, Dentistry and other non-paramedical programs such as Hotel Restaurant 
                Management and Maritime Education. And after more than four decades os serious and dedicated quest for excellent and quality 
                education, OLFU continuously produces more and more graduates who excel in their field.<br><br>Click for more info!</p>
            </div>
        </div>
        </a>
   </div>
</div>
<!--third row-->
<div class="services">
     
    <div class="box">
        <a class="info" href="info/slu_content.html">
        <div class="card" id="slu">
             <h1>Saint Louis University</h1>
             <h2 class="school">Saint Louis University</h2>
                <div class="content">
                <p>We are committed to developing locally responsive, globally competitive, and empowered human resources who are creative, competent, socially involved, and imbued with Christian spirit.

                    We, in partnership with our stakeholders, are committed to continually improving the effectiveness of our quality management system in meeting all applicable requirements towards the utmost satisfaction of our valued customers.</p>
                </div>
        </div>
        </a>
   </div>
   <div class="box">
        <a class="info" href="info/usl_content.html">
        <div class="card" id="usl">
         <h1>University of Saint Louis</h1>
         <h2 class="school">University of Saint Louis</h2>
            <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
</div>
    <div class="box">
        <a class="info" href="info/bsc_content.html">
        <div class="card" id="bsc">
         <h1>Batanes State College</h1>
         <h2 class="school">Batanes State College</h2>
            <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
    </div>
</div>
<!--fourth row-->
<div class="services">
     
    <div class="box">
        <a class="info" href="info/csu_content.html">
        <div class="card" id="csu">
             <h1>Cagayan State University</h1>
             <h2 class="school">Cagayan State University</h2>
                <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
        </div>
        </a>
   </div>
   <div class="box">
        <a class="info" href="info/sdc_content.html">
        <div class="card" id="sdc">
         <h1>Saint Dominic College</h1>
         <h2 class="school">Saint Dominic College</h2>
            <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
</div>
    <div class="box">
        <a class="info" href="info/smu_content.html">
        <div class="card" id="smu">
         <h1>Saint Mary's University</h1>
         <h2 class="school">Saint Mary's University</h2>
            <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
    </div>
</div>
</body>
</html>