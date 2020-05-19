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
    <form action="login_check_ponudniki.php" method="post" >
    <div class="logintitle">eHrana Login - Ponudniki </div><br>
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
    Če nisi ponudnik pojdi  <a href="./login.php" class="txt2">NAZAJ</a>!
</div>
    </form>
</div>

</body>
</html>