<?php
if (!session_id()) {
    session_start();
} 
if($_SESSION['uid']=="admin"){
    
}else{
    header("Location:./index.php?error=notadmin");
    die();
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eHrana admin</title>

    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="admintitle"> 
    <p>
        eHrana ADMIN PAGE 
    </p>
    <a href="./logout.php" class="adminlogout">LOGOUT</a>
    
</div>