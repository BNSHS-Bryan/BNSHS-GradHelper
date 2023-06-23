<!DOCTYPE html>
<html lang="en">
   <head>
   <title>BNSHS GradHelper</title>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            </div>
            <form id="login" class="input-group" action="authenticate.php" method="post">
                <input type="text" class="input-field" name="userID" placeholder="User Id" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
<?php

?>
        </div>
    </div>
</body>
</html>