<?php
    session_start();
    $userID = $_POST['userID'];
    $password = $_POST['password'];

    //database connection here

    $con = new mysqli("localhost","root","","gradhelper");
    if($con->connect_error) {
        die("failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM users WHERE userID = ?");
        $stmt->bind_param("s", $userID);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] === $password) {
                if ($userID == 1) {
                    // Redirect user with userID = 1 to a different page
                    header('Location: admin.php');
                } else {
                    // Redirect other users to the regular page
                    $_SESSION['userID'] = $_POST['userID'];
                    header('Location: index.php');
                }
            } else {
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<script>window.location='login.php'</script>";
            }
        } else {
            $message = "Username and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script>window.location='login.php'</script>";
        }
    }
?>