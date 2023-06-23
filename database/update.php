<!DOCTYPE html>
<html>
<a href="index.php">Show Data</a>
<br><br>

<?php
include 'config.php';
$a=mysqli_query($conn,"SELECT * FROM userdata WHERE userID='$_GET[userID]'");
$b=mysqli_fetch_array($a,MYSQLI_ASSOC);
?>
<form method="post">
	userID : <input type="text" name="userID" placeholder="Insert Student ID" value="<?= $b['userID'] ?>"><br><br>
	Name : <input type="text" name="fname" placeholder="Insert Name" value="<?= $b['fname']; ?>"><br><br>
	firstname : <input type="text" name="firstname" placeholder="Insert first name" value="<?= $b['firstname']; ?>"><br><br>
	lastname : <input type="text" name="lastname" placeholder="Insert last name" value="<?= $b['lastname']; ?>"><br><br>
    mobileNO : <input type="text" name="mobileNO" placeholder="Insert mobileNO" value="<?= $b['mobileNO']; ?>"><br><br>
    email : <input type="text" name="email" placeholder="Insert email" value="<?= $b['email']; ?>"><br><br>
    Mother's Name : <input type="text" name="Mom" placeholder="Insert Mother's Occupation" value="<?= $b['Mom']; ?>"><br><br>
    Mother's Occupation : <input type="text" name="Mom_work" placeholder="Insert Mother's Occupation" value="<?= $b['Mom_work']; ?>"><br><br>
    Father's Name : <input type="text" name="Dad" placeholder="Insert Father's Name" value="<?= $b['Dad']; ?>"><br><br>
    Father's Occupation  : <input type="text" name="Dad_work" placeholder="Insert Father's Occupation" value="<?= $b['Dad_work']; ?>"><br><br>
    Barangay : <input type="text" name="barangay" placeholder="Insert barangay" value="<?= $b['barangay']; ?>"><br><br> 
    Municipality : <input type="text" name="municipality" placeholder="Insert municipality" value="<?= $b['municipality']; ?>"><br><br> 
    Province : <input type="text" name="province" placeholder="Insert Province" value="<?= $b['province']; ?>"><br><br> 
    Age : <input type="text" name="age" placeholder="Insert Age" value="<?= $b['age']; ?>"><br><br> 
    Birth Date : <input type="text" name="bday" placeholder="Insert Birth Date (yyyy-mm-dd)" value="<?= $b['bday']; ?>"><br><br> 
    Section : <input type="text" name="section" placeholder="Insert Section" value="<?= $b['section']; ?>"><br><br> 
    Strand : <input type="text" name="strand" placeholder="Insert strand" value="<?= $b['strand']; ?>"><br><br> 
    <input type="submit" name="update" value="Update">
	<input type="reset" name="cancel" value="Cancel">
</form>
<?php
if(isset($_POST['update']))
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



  $sql="UPDATE userdata SET userID='$userID',fname='$fname',firstname='$firstname',lastname='$lastname',mobileNO='$mobileNO',email='$email',Mom='$Mom',Mom_work='$Mom_work',Dad='$Dad',Dad_work='$Dad_work',barangay='$barangay',municipality='$municipality',province='$province',age='$age' ,bday='$bday' ,section='$section' ,strand='$strand' WHERE userID='$_GET[userID]'";
  if($conn->query($sql) === false)
  {
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { 
    echo "<script>alert('Update Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
}

?>      
</html>