<!DOCTYPE html>
<html lang="en">
<head>
<title>BNSHS GradHelper</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	session_start();
	if(!ISSET($_SESSION['userID'])){
		header('location:index.php');
	}
?>
</head>
    <div class="header">
        <a href="index.php" class="logo">BNSHS GradHelper</a>
        <div class="header-right" id="myLinks">
          <a class="active" href="#home">Home</a>
          <a href="profile.php">Profile</a>
          <a href="reviewers.html">Reviewers</a>
          <a href="about.html">About Us</a>
          <a href="logout.php">Logout</a>
        </div>
      </div>
    <!-- Start of Body-->
    <div class="greetings">
    <?php
        require 'users/connection.php';

        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `userID`='$_SESSION[userID]'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);

        echo "<h2>Welcome, " . $fetch['name'] . "</h2>";
    ?>
</div>

<div class="choice">
    <h2>Choose your preferred course:
        <select id="orderSelect" onchange="changeOrder()">
            <option value="default">Your Course</option>
            <option value="engineering">Engineering</option>
            <option value="medicine">Medicine</option>
            <option value="education">Education</option>
            <option value="accountancy">Accountancy</option>
        </select>
    </h2>
</div>

<div class="title"><br>Our Recommended Schools</div>

<div class="services snaps-inline">

        <div class="box">
            <a id="div1" class="info" href="info/dlsu_content.html"> 
                <div class="card school-box" id="dlsu">
                 <h1 id="1h1">De La Salle University</h1>
                 <h2 id="1h2" class="school">De La Salle University</h2>
                    <div class="content">
                    <p id="1p"><br>De La Salle University positions itself as a leader
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
           <a id="div2" class="info" href="info/up_content.html">
                <div class="card school-box" id="up">
                 <h1 id="2h1">University of the Philippines</h1>
                 <h2 id="2h2" class="school">University of the Philippines</h2>
                <div class="content">
                <p id="2p">The University of the Philippines (UP) is the country’s national university. 
                    This premier institution of higher learning was established in 1908 and is 
                    now a university system composed of eight constituent universities located in 17 campuses all over the archipelago.
                    As of 2020, the Commission on Higher Education has declared 41 units of the university as Centers of Excellence; 
                    while 5 units have been declared as Centers of Development.<br><br><br>Click for more info!</p>
                
                </div>
        </div>
        </a>
   </div>
   <div class="box">
    <a id="div3" class="info" href="info/ust_content.html">
    <div class="card school-box" id="ust">
         <h1 id="3h1">University of Santo Thomas</h1>
         <h2 id="3h2"class="school">University of Santo Thomas</h2>
            <div class="content">
            <p id="3p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
    </div>
    </a>
    </div>
         
    <div class="box">
        <a id ="div4" class="info" href="info/admu_content.html">
        <div class="card school-box" id="admu">
             <h1 id="4h1">Ateneo de Manila University</h1>
             <h2 id="4h2" class="school">Ateneo de Manila University</h2>
                <div class="content">
                <p id="4p">Ateneo's Motto, "Lux in Domino".<br>
                    To be "light in the Lord" in all fullness demands moving insistently and deliberately towards God 
                    as the center of a person's life, identifying the issues that such a centering poses, and then 
                    moving out to the world to find ever new ways of constructing the edifice, cultivating the garden, 
                    painting the masterpiece, that God is unfolding in one's life.<br><br><br><br>Click for more info!</p>                
                </div>
        </div>
        </a>
   </div>
   <div class="box">
        <a id="div5" class="info" href="info/pup_content.html">
        <div class="card school-box" id="pup">
         <h1 id="5h1">Polytechnic University of the Philippines</h1>
         <h2 id="5h2" class="school">Polytechnic University of the Philippines</h2>
            <div class="content">
            <p id="5p">The Polytechnic University of the Philippines (PUP) is a government educational institution governed by 
                Republic Act Number 8292.
                PUP is one of the country's highly competent educational institutions. The PUP Community is composed of the Board of Regents, 
                University Officials, Administrative and Academic Personnel, Students, various Organizations, and the Alumni.<br><br><br> Click for more info!</p=>
            </div>
        </div>
        </a>
</div>
    <div class="box">
        <a id="div6" class="info" href="info/olfu_contetnt.,html">
        <div class="card school-box" id="olfu">
         <h1 id="6h1">Our Lady of Fatima University</h1>
         <h2 id="6h2"class="school">Our Lady of Fatima University</h2>
            <div class="content">
            <p id="6p">Our Lady of Fatima University has become one of the most respected and admired educational institutions in the country today both 
                in the field of paramedical such as Medicine, Pharmacy, Dentistry and other non-paramedical programs such as Hotel Restaurant 
                Management and Maritime Education. And after more than four decades os serious and dedicated quest for excellent and quality 
                education, OLFU continuously produces more and more graduates who excel in their field.<br><br>Click for more info!</p>
            </div>
        </div>
        </a>
   </div>
   <div class="box">
        <a id="div7" class="info" href="info/slu_content.html">
        <div class="card school-box" id="slu">
             <h1 id="7h1">Saint Louis University</h1>
             <h2 id="7h2" class="school">Saint Louis University</h2>
                <div class="content">
                <p id="7p">We are committed to developing locally responsive, globally competitive, and empowered human resources who are creative, competent, socially involved, and imbued with Christian spirit.

                    We, in partnership with our stakeholders, are committed to continually improving the effectiveness of our quality management system in meeting all applicable requirements towards the utmost satisfaction of our valued customers.</p>
                </div>
        </div>
        </a>
   </div>
   <div class="box">
        <a id="div8" class="info" href="info/usl_content.html">
        <div class="card school-box" id="usl">
         <h1 id="8h1">University of Saint Louis</h1>
         <h2 id="8h2" class="school">University of Saint Louis</h2>
            <div class="content">
            <p id="8p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
    </div>
    <div class="box">
        <a id="div9" class="info" href="info/bsc_content.html">
        <div class="card school-box" id="bsc">
         <h1 id="9h1">Batanes State College</h1>
         <h2 id="9h2" class="school">Batanes State College</h2>
            <div class="content">
            <p id="9p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
    </div>
    <div class="box">
        <a id="div10"class="info" href="info/csu_content.html">
        <div class="card school-box" id="csu">
             <h1 id="10h1">Cagayan State University</h1>
             <h2 id="10h2" class="school">Cagayan State University</h2>
                <div class="content">
                <p id="10p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
        </div>
        </a>
   </div>
   <div class="box">
        <a id="div11" class="info" href="info/sdc_content.html">
        <div class="card school-box" id="sdc">
         <h1 id="11h1">Saint Dominic College</h1>
         <h2 id="11h2" class="school">Saint Dominic College</h2>
            <div class="content">
             <p id="11p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
    </div>
    <div class="box">
        <a id="div12" class="info" href="info/smu_content.html">
        <div class="card school-box" id="smu">
         <h1 id="11h1">Saint Mary's University</h1>
         <h2 id="12h2" class="school">Saint Mary's University</h2>
            <div class="content">
             <p id="12p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        </a>
    </div>
</div>
</body>
<script>
/// Get the selection box element and the target elements
var orderSelect = document.getElementById('orderSelect');
// images
var dlsu = document.getElementById('dlsu');
var up = document.getElementById('up');
var ust = document.getElementById('ust');
var admu = document.getElementById('admu');
var pup = document.getElementById('pup');
var olfu = document.getElementById('olfu');
var slu = document.getElementById('slu');
var usl = document.getElementById('usl');
var bsc = document.getElementById('bsc');
var csu = document.getElementById('csu');
var sdc = document.getElementById('sdc');
//  H1
var h11 = document.getElementById('1h1');
var h12 = document.getElementById('2h1');
var h13 = document.getElementById('3h1');
var h14 = document.getElementById('4h1');
var h15 = document.getElementById('5h1');
var h16 = document.getElementById('6h1');
var h17 = document.getElementById('7h1');
var h18 = document.getElementById('8h1');
var h19 = document.getElementById('9h1');
var h110 = document.getElementById('10h1');
var h111 = document.getElementById('11h1');
var h112 = document.getElementById('12h1');
// H2
var h21 = document.getElementById('1h2');
var h22 = document.getElementById('2h2');
var h23 = document.getElementById('3h2');
var h24 = document.getElementById('4h2');
var h25 = document.getElementById('5h2');
var h26 = document.getElementById('6h2');
var h27 = document.getElementById('7h2');
var h28 = document.getElementById('8h2');
var h29 = document.getElementById('9h2');
var h210 = document.getElementById('10h2');
var h211 = document.getElementById('11h2');
var h212 = document.getElementById('12h2');

// p
var p1 = document.getElementById('1p');
var p2 = document.getElementById('2p');
var p3 = document.getElementById('3p');
var p4 = document.getElementById('4p');
var p5 = document.getElementById('5p');
var p6 = document.getElementById('6p');
var p7 = document.getElementById('7p');
var p8 = document.getElementById('8p');
var p9 = document.getElementById('9p');
var p10 = document.getElementById('10p');
var p11 = document.getElementById('11p');
var p12 = document.getElementById('12p');
//links
var div1 = document.getElementById('div1');
var div2 = document.getElementById('div2');
var div3 = document.getElementById('div3');
var div4 = document.getElementById('div4');
var div5 = document.getElementById('div5');
var div6 = document.getElementById('div6');
var div7 = document.getElementById('div7');
var div8 = document.getElementById('div8');
var div9 = document.getElementById('div9');
var div10 = document.getElementById('div10');
var div11 = document.getElementById('div11');
var div12 = document.getElementById('div12');
// Function to handle the change event of the selection box
function changeOrder() {
  var selectedValue = orderSelect.value;

  switch (selectedValue) {
  case 'default':
    document.body.style.backgroundImage = 'url("default.jpg")';
    break;
  case 'engineering':
    //First Div
    document.getElementById('dlsu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/up/up.jpg")';
    h11.textContent = 'University of The Philippines';
    h21.textContent = 'University of The Philippines';
    p1.textContent = 'The University of the Philippines (UP) is the country’s national university. This premier institution of higher learning was established in 1908 and is now a university system composed of eight constituent universities located in 17 campuses all over the archipelago. As of 2020, the Commission on Higher Education has declared 41 units of the university as Centers of Excellence; while 5 units have been declared as Centers of Development.'+'Click for more info!';
   
    //Second Div
    document.getElementById('up').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/admu/admu.jpeg")';
    h12.textContent = 'Ateneo De Manila University';
    h22.textContent = 'Ateneo De Manila University';
    p2.textContent = 'Ateneo\'s Motto, \"Lux in Domino\".\"To be light in the Lord\" in all fullness demands moving insistently and deliberately towards God as the center of a persons life, identifying the issues that such a centering poses, and then moving out to the world to find ever new ways of constructing the edifice, cultivating the garden, painting the masterpiece, that God is unfolding in ones life.Click for more info!';
    //Third Div
    document.getElementById('ust').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/dlsu/dlsu.jpg")';
    h13.textContent = 'De La Salle University';
    h23.textContent = 'De La Salle University';
    p3.textContent = 'De La Salle University positions itself as a leader in molding human resources who serve the church and the nation. It is a Catholic coeducational institution founded in 1911 by the Brothers of the Christian Schools. The University is a hub for higher education training renowned for its academic excellence, prolific and relevant research, and involved community service.\n\nClick for more info!';
    //Fourth Div
    document.getElementById('admu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/ust/ust.jpeg")';
    h14.textContent = 'University of Santo Thomas';
    h24.textContent = 'University of Santo Thomas';
    p4.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Fifth Div
    document.getElementById('pup').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/pup/pup.jpg")';
    h15.textContent = 'Polytechnic University of the Philippines';
    h25.textContent = 'Polytechnic University of the Philippines';
    p5.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Sixth Div
    document.getElementById('olfu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/usl/usl.jpeg")';
    h16.textContent = 'University of Saint Louis';
    h26.textContent = 'University of Saint Louis';
    p6.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Seventh Div
    document.getElementById('slu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/csu/csu.jpg")';
    h17.textContent = 'Cagayan State University';
    h27.textContent = 'Cagayan State University';
    p7.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Eighth Div
    document.getElementById('usl').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/slu/slu.png")';
    h18.textContent = 'Saint Louis University';
    h28.textContent = 'Saint Louis University';
    p8.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Ninth Div
    document.getElementById('bsc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/smu/smu.jpg")';
    h19.textContent = 'Saint Marys University';
    h29.textContent = 'Saint Mary University';
    p9.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Tenth Div
    document.getElementById('csu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/olfu/olfu.jpg")';
    h110.textContent = 'Our Lady of Fatima University';
    h210.textContent = 'Our Lady of Fatima University';
    p10.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Eleventh Div
    document.getElementById('sdc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/bsc/bsc.JPG")';
    h111.textContent = 'Batanes State College';
    h211.textContent = 'Batanes State College';
    p11.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Twelfth Div
    document.getElementById('smu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/sdc/sdc.jpg")';
    h112.textContent = 'Saint Dominic College';
    h212.textContent = 'Saint Dominic College';
    p12.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    break;


  case 'medicine':
      //First Div
    document.getElementById('dlsu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/ust/ust.jpeg")';
    h11.textContent = 'University of Santo Thomas';
    h21.textContent = 'University of Santo Thomas';
    p1.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
   
    //Second Div
    document.getElementById('up').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/up/up.jpg")';
    h12.textContent = 'University of the Philippines';
    h22.textContent = 'University of the Philippines';
    p2.textContent = 'The University of the Philippines (UP) is the country’s national university. This premier institution of higher learning was established in 1908 and is now a university system composed of eight constituent universities located in 17 campuses all over the archipelago. As of 2020, the Commission on Higher Education has declared 41 units of the university as Centers of Excellence; while 5 units have been declared as Centers of Development.'+'Click for more info!';
    //Third Div
    document.getElementById('ust').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/admu/admu.jpeg")';
    h13.textContent = 'Ateneo De Manila University';
    h23.textContent = 'Ateneo De Manila University';
    p3.textContent = 'Ateneo\'s Motto, \"Lux in Domino\".\"To be light in the Lord\" in all fullness demands moving insistently and deliberately towards God as the center of a persons life, identifying the issues that such a centering poses, and then moving out to the world to find ever new ways of constructing the edifice, cultivating the garden, painting the masterpiece, that God is unfolding in ones life.Click for more info!';
    //Fourth Div
    document.getElementById('admu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/slu/slu.png")';
    h14.textContent = 'Saint Louis University';
    h24.textContent = 'Saint Louis University';
    p4.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Fifth Div
    document.getElementById('pup').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/dlsu/dlsu.jpg")';
    h15.textContent = 'De La Salle University';
    h25.textContent = 'De La Salle University';
    p5.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Sixth Div
    document.getElementById('olfu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/csu/csu.jpg")';
    h16.textContent = 'Cagayan State University';
    h26.textContent = 'Cagayan State University';
    p6.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Seventh Div
    document.getElementById('slu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/usl/usl.jpeg")';
    h17.textContent = 'University of Saint Louis';
    h27.textContent = 'University of Saint Louis';
    p7.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    
    //Eighth Div
    document.getElementById('usl').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/slu/slu.png")';
    h18.textContent = 'Our Lady of Fatima University';
    h28.textContent = 'Our Lady of Fatima University';
    p8.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    
    //Ninth Div
    document.getElementById('bsc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/smu/smu.jpg")';
    h19.textContent = 'Saint Marys University';
    h29.textContent = 'Saint Mary University';
    p9.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Tenth Div
    document.getElementById('csu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/olfu/olfu.jpg")';
    h110.textContent = 'Our Lady of Fatima University';
    h210.textContent = 'Our Lady of Fatima University';
    p10.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Eleventh Div
    document.getElementById('sdc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/bsc/bsc.JPG")';
    h111.textContent = 'Batanes State College';
    h211.textContent = 'Batanes State College';
    p11.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Twelfth Div
    document.getElementById('smu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/sdc/sdc.jpg")';
    h112.textContent = 'Saint Dominic College';
    h212.textContent = 'Saint Dominic College';
    p12.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    break;
  case 'education':
    //First Div
    document.getElementById('dlsu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/ust/ust.jpeg")';
    h11.textContent = 'University of Santo Thomas';
    h21.textContent = 'University of Santo Thomas';
    p1.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
   
    //Second Div
    document.getElementById('up').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/up/up.jpg")';
    h12.textContent = 'University of the Philippines';
    h22.textContent = 'University of the Philippines';
    p2.textContent = 'The University of the Philippines (UP) is the country’s national university. This premier institution of higher learning was established in 1908 and is now a university system composed of eight constituent universities located in 17 campuses all over the archipelago. As of 2020, the Commission on Higher Education has declared 41 units of the university as Centers of Excellence; while 5 units have been declared as Centers of Development.'+'Click for more info!';
    //Third Div
    document.getElementById('ust').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/csu/csu.jpg")';
    h13.textContent = 'Cagayan State University';
    h23.textContent = 'Cagayan State University';
    p3.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Fourth Div
    document.getElementById('admu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/slu/slu.png")';
    h14.textContent = 'Saint Louis University';
    h24.textContent = 'Saint Louis University';
    p4.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Fifth Div
    document.getElementById('pup').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/admu/admu.jpeg")';
    h15.textContent = 'Ateneo de Manila University';
    h25.textContent = 'Ateneo De Manila University';
    p5.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Sixth Div
    document.getElementById('olfu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/pup/pup.jpg")';
    h16.textContent = 'Polytechnic University of the Philippines';
    h26.textContent = 'Polytechnic University of the Philippines';
    p6.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Seventh Div
    document.getElementById('slu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/bsc/bsc.JPG")';
    h17.textContent = 'Batanes State College';
    h27.textContent = 'Batanes State College';
    p7.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    
    //Eighth Div
    document.getElementById('usl').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/smu/smu.jpg")';
    h18.textContent = 'Saint Mary\'s University';
    h28.textContent = 'Saint Mary\'s University';
    p8.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    
    //Ninth Div
    document.getElementById('bsc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/dlsu/dlsu.jpg")';
    h19.textContent = 'De La Salle University';
    h29.textContent = 'De La Salle University';
    p9.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Tenth Div
    document.getElementById('csu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/olfu/olfu.jpg")';
    h110.textContent = 'Our Lady of Fatima University';
    h210.textContent = 'Our Lady of Fatima University';
    p10.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Eleventh Div
    document.getElementById('sdc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/usl/usl.jpeg")';
    h111.textContent = 'University of Saint Louis';
    h211.textContent = 'University of Saint Louis';
    p11.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Twelfth Div
    document.getElementById('smu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/sdc/sdc.jpg")';
    h112.textContent = 'Saint Dominic College';
    h212.textContent = 'Saint Dominic College';
    p12.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    break;
  case 'accountancy':
      //First Div
    document.getElementById('dlsu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/up/up.jpg")';
    h11.textContent = 'University of the Philippines';
    h21.textContent = 'University of the Philippines';
    p1.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
   
    //Second Div
    document.getElementById('up').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/dlsu/dlsu.jpg")';
    h12.textContent = 'De La Salle University';
    h22.textContent = 'De La Salle University';
    p2.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Third Div
    document.getElementById('ust').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/ust/ust.jpeg")';
    h13.textContent = 'University of Santo Thomas';
    h23.textContent = 'University of Santo Thomas';
    p3.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Fourth Div
    document.getElementById('admu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/csu/csu.jpg")';
    h14.textContent = 'Cagayan State University';
    h24.textContent = 'Cagayan State University';
    p4.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Fifth Div
    document.getElementById('pup').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/usl/usl.jpeg")';
    h15.textContent = 'University of Saint Louis';
    h25.textContent = 'University of Saint Louis';
    p5.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Sixth Div
    document.getElementById('olfu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/admu/admu.jpeg")';
    h16.textContent = 'Ateneo De Manila University';
    h26.textContent = 'Ateneo De Manila University';
    p6.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Seventh Div
    document.getElementById('slu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/pup/pup.jpg")';
    h17.textContent = 'Polytechnic University of the Philippines';
    h27.textContent = 'Polytechnic University of the Philippines';
    p7.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    
    //Eighth Div
    document.getElementById('usl').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/slu/slu.png")';
    h18.textContent = 'Saint Louis University';
    h28.textContent = 'Saint Louis University';
    p8.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    
    //Ninth Div
    document.getElementById('bsc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/dlsu/dlsu.jpg")';
    h19.textContent = 'Saint Mary\'s University';
    h29.textContent = 'Saint Mary\'s University';
    p9.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Tenth Div
    document.getElementById('csu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/olfu/olfu.jpg")';
    h110.textContent = 'Our Lady of Fatima University';
    h210.textContent = 'Our Lady of Fatima University';
    p10.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Eleventh Div
    document.getElementById('sdc').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/bsc/bsc.JPG")';
    h111.textContent = 'Batanes State College';
    h211.textContent = 'Batanes State College';
    p11.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    //Twelfth Div
    document.getElementById('smu').style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/sdc/sdc.jpg")';
    h112.textContent = 'Saint Dominic College';
    h212.textContent = 'Saint Dominic College';
    p12.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
     break;

}
}

</script>
</html>