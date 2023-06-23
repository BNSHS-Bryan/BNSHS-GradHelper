<?php
  include "connection.php";
  $id="";
  $userID="";
  $name="";
  $password="";


  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:GradHelper/users/server.php");
      exit;
      }
    $id = $_GET['id'];
    $sql = "select * from users where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: GradHelper/users/server.php");
      exit;
    }
    $userID=$row["userID"];
    $name=$row["name"];
    $password=$row["password"];

  }
  else{
    $id = $_POST["id"];
    $userID = $_POST["userID"];
    $name = $_POST["name"];
    $password = $_POST["password"];

    $sql = "update users set userID='$userID', name='$name', password='$password' where id='$id'";
    $result = $conn->query($sql);
    
  }
?>
<!DOCTYPE html>
<html>
<head>
 <title>GradHelper CRUD</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="server.php">GradHelper CRUD</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="server.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="col-lg-6 m-auto">
 
<form method="post">
 
<br><br><div class="card">
 
<div class="card-header bg-warning">
<h1 class="text-white text-center">  Update Member </h1>
</div><br>

<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

<label> userID: </label>
<input type="text" name="userID" value="<?php echo $userID; ?>" class="form-control"> <br>

<label> NAME: </label>
<input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

<label> PASSWORD: </label>
<input type="text" name="password" value="<?php echo $password; ?>" class="form-control"> <br>
 
<button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
<a class="btn btn-info" type="submit" name="cancel" href="server.php"> Cancel </a><br>

</div>
</form>
</div>
</body>
</html>