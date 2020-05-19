<?php
if (!session_id()) {
    session_start();
}

if(isset($_SESSION['uid'])){
    header('Location:./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8mb4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eHrana</title>

    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="loginform">
    <form action="login_check.php" method="post" >
    <div class="logintitle">eHrana Login </div><br>
    <div>
        <div>
            Username
        </div>
        <input type="text" placeholder="Enter Username" name="uid" required>
    </div>

    <div>
        <div>
            Password
        </div>
        <input type="password" placeholder="Enter Password" name="pass" required>
    </div>
    <button type="submit">Login</button>  
    <div>
    Ali pa se registriraj <a href="./register.php" class="txt2">TUKAJ</a> če še nimaš računa
</div>
    <div>
    Če se želiš prijaviti kot ponudnik, to stori <a href="./ponudniklogin.php" >TUKAJ</a>!
</div>
    </form>
</div>

</body>
</html>