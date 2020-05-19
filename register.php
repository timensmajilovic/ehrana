<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8mb4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eHrana</title>

    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="registerform">
    <form action="useradd.php" method="post" >
    <div class="register">eHrana Register </div><br>
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
    <button type="submit">Register</button>  
    <div>
    Če že imaš račun se prijavi <a href="./login.php" class="txt2">TUKAJ</a>!
</div>
    </form>
</div>

</body>
</html>