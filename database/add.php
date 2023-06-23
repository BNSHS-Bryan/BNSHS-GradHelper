<!DOCTYPE html>
<html>
<title>BNSHS GradHelper</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
    <header>
    <a href="index.php">Insert New User</a>
    </header>
<br><br>
<form method="post" class="form">
	userID : <input type="text" name="userID" placeholder="Insert Student ID"><br><br>
	Name : <input type="text" name="fname" placeholder="Insert Name"><br><br>
	Firstname : <input type="text" name="firstname" placeholder="Insert First Name"><br><br>
	Lastname : <input type="text" name="lastname" placeholder="Insert Last Name"><br><br>
	Mobile no. : <input type="text" name="mobileNO" placeholder="Insert mobileNO (09123456789)"><br><br>
	Email Address: <input type="text" name="email" placeholder="Insert email"><br><br>
	Mother's Name : <input type="text" name="Mom" placeholder="Insert Mother's Name"><br><br>
	Mother's Occupation : <input type="text" name="Mom_work" placeholder="Insert Mother's Occupation"><br><br>
    Father's Name : <input type="text" name="Dad" placeholder="Insert Father's Name"><br><br>
	Father's Occupation : <input type="text" name="Dad_work" placeholder="Insert Father's Occupation"><br><br>
	Barangay : <input type="text" name="barangay" placeholder="Insert Barangay"><br><br>
	Municipality : <input type="text" name="municipality" placeholder="Insert Municipality"><br><br>    
	Province : <input type="text" name="province" placeholder="Insert Province"><br><br>
	Age : <input type="text" name="age" placeholder="Insert Age"><br><br>
	Birth date : <input type="text" name="bday" placeholder="Insert Birth date"><br><br>
	Section : <input type="text" name="section" placeholder="Insert Section"><br><br>
	Strand : <input type="text" name="strand" placeholder="Insert Strand"><br><br>


    <input type="submit" name="add" value="Add" id="submit">
	<input type="reset" name="reset" value="Cancel" id="cancel">
</form>
<?php
if(isset($_POST['add']))
{
include 'config.php';
  $userID=$_POST['userID'];
  $fname=$_POST['fname'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $mobileNO=$_POST['mobileNO'];
  $email=$_POST['email'];
  $Mom=$_POST['Mom'];
  $Mom_work=$_POST['Mom_work'];
  $Dad=$_POST['Dad'];
  $Dad_work=$_POST['Dad_work'];
  $barangay=$_POST['barangay'];
  $municipality=$_POST['municipality'];
  $province=$_POST['province'];
  $age=$_POST['age'];
  $bday=$_POST['bday'];
  $section=$_POST['section'];
  $strand=$_POST['strand'];
 
  $sql="INSERT INTO userdata (userID,fname,firstname,lastname,mobileNO,email,Mom,Mom_work,Dad,Dad_work,barangay,municipality,province,age,bday,section,strand) VALUES ('$userID','$fname','$firstname','$lastname','$mobileNO','$email','$Mom','$Mom_work','$Dad','$Dad_work','$barangay','$municipality','$province','$age','$bday','$section','$strand')";                                
  if($conn->query($sql) === false)
  {
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { 
    echo "<script>alert('Add Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
}

?>   

<html>