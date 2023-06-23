<!DOCTYPE html>
<html lang="en">
   <head>
   <title>BNSHS GradHelper</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <?php
	session_start();
	if(!ISSET($_SESSION['userID'])){
		header('location:index.php');
	}
?>
<body class="bg-black">
    <?php
    include "users/connection.php";
    ?>
<div class="header">
        <a href="#default" class="logo">BNSHS GradHelper</a>
        <div class="header-right">
          <a href="index.php">Home</a>
          <a class="active">Profile</a>
          <a href="reviewers.html">Reviewers</a>
          <a href="about.html">About Us</a>
          <a href="logout.php">Logout</a>
        </div>
</div>
    <div class="border px-3 p-1 container rounded bg-black mt-5 mb-5">
    <div class="row">   
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold text-white">  <?php
				require'users/connection.php';


				$query = mysqli_query($conn, "SELECT * FROM `userdata` WHERE `userID`='$_SESSION[userID]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
 
				echo "<h2 class='text-white'>".$fetch['fname']."</h2>";
			?>
</span><span class="text-white"><?php echo "<p class='text-white'>".$fetch['email']."</p>"?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right text-white">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 text-white"><label class="labels text-white">Name</label><?php echo "<p class='form-control text-black'>".$fetch['firstname']."</p>"?></div>
                    <div class="col-md-6 text-white"><label class="labels text-white">Surname</label><?php echo "<p class='form-control text-black'>".$fetch['lastname']."</p>"?></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 text-white"><label class="labels">Mobile Number</label><?php echo "<p class='form-control text-black'>".$fetch['mobileNO']."</p>"?></div>
                    <div class="col-md-12 text-white"><label class="labels">Barangay</label><?php echo "<p class='form-control text-black'>".$fetch['barangay']."</p>"?></div>
                    <div class="col-md-12 text-white"><label class="labels">Municipal</label><?php echo "<p class='form-control text-black'>".$fetch['municipality']."</p>"?></div>
                    <div class="col-md-12 text-white"><label class="labels">Province</label><?php echo "<p class='form-control text-black'>".$fetch['province']."</p>"?></div>
                    <div class="col-md-12 text-white"><label class="labels">Mother' Maiden Name</label><?php echo "<p class='form-control text-black'>".$fetch['Mom']."</p>"?></div>
                    <div class="col-md-12 text-white"><label class="labels">Mother's Occupation</label><?php echo "<p class='form-control text-black'>".$fetch['Mom_work']."</p>"?></div>
                    <div class="col-md-12 text-white"><label class="labels">Father's Name</label><?php echo "<p class='form-control text-black'>".$fetch['Dad']."</p>"?></div>
                    <div class="col-md-12 text-white"><label class="labels">Father's Occupation</label><?php echo "<p class='form-control text-black'>".$fetch['Dad_work']."</p>"?></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 text-white"><label class="labels">Section</label><?php echo "<p class='form-control text-black'>".$fetch['section']."</p>"?></div>
                    <div class="col-md-6 text-white"><label class="labels">Strand</label><?php echo "<p class='form-control text-black'>".$fetch['strand']."</p>"?></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div><br><br></div>
                <div class="col-md-12 text-white"><label class="labels">Age</label><?php echo "<p class='form-control text-black'>".$fetch['age']."</p>"?></div> <br>
                <div class="col-md-12 text-white"><label class="labels">Birthdate</label><?php echo "<p class='form-control text-black'>".$fetch['bday']."</p>"?></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>