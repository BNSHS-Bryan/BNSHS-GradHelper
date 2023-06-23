<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="server.php">GradHelper CRUD</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="add.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container my-4">
    <table class="table">
    <thead>
      <tr>
       <th width="20">userID</th>
       <th>Name</th>
       <th>Firstname</th>
       <th>Lastname</th>
       <th>mobileNO</th>
       <th>Email</th>
       <th>Mother's Name</th>
       <th>Mother's Occupation</th>
       <th>Father's Name</th>
       <th>Father's Occupation</th>
       <th>Barangay</th>
       <th>Municipality</th>
       <th>Province</th>
       <th>Age</th>
       <th>Birthday</th>
       <th>Section</th>
       <th>Strand</th>
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "config.php";
        $sql = "select * from userdata";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[userID]</th>
        <td>$row[fname]</td>
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[mobileNO]</td>
        <td>$row[email]</td>
        <td>$row[Mom]</td>
        <td>$row[Mom_work]</td>
        <td>$row[Dad]</td>
        <td>$row[Dad_work]</td>
        <td>$row[barangay]</td>
        <td>$row[municipality]</td>
        <td>$row[province]</td>
        <td>$row[age]</td>
        <td>$row[bday]</td>
        <td>$row[section]</td>
        <td>$row[strand]</td>
        <td>
                  <a class='btn btn-success' href='update.php?id=$row[userID]'>Edit</a>
                  <a class='btn btn-danger' href='index.php?id=$row[userID]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>


<?php

if(isset($_GET['userID']))
{
    $userID=$_GET['userID'];
    $sql="DELETE FROM userdata WHERE userID='$userID'";
    if($conn->query($sql) === false)
    {
      trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } 
    else 
    {
      echo "<script>alert('Delete Success!')</script>";
      echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
    }
}

?>
</body>
<style>

    body{
        margin-top: 0px; 
        margin: 0px 0;
        border: 0px;
    }
    h1{
        background-color: #212529;
    }
    a{
        text-decoration: none;
    }
    table{
        border-collapse: collapse;
        margin-left: 0px;
    }
    .container{
        margin: 10px 10px
    }
    td {
  text-align: center;
    }
    th {
  text-align: center;
}
</style>
</html>