<?php
    include "config.php";
    if(isset($_GET['userID'])){
        $id = $_GET['userID'];
        $sql = "DELETE from `userdata` where userID=$userID";
        $conn->query($sql);
    }
    header('location:/GradHelper/database/index.php');
    exit;
?>