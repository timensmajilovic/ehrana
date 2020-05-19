<?php
if (!session_id()) {
    session_start();
}
if($_SESSION['uid']=="admin"){
    header("Location:./admin.php");
            die();
}
if(isset($_SESSION['uid'])){
}else{
    header('Location:./login.php');
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

<div class="admintitle"> 
    <p>
        eHrana - Shop 
    </p>
    <a href="./checkout.php" class="adminlogout">CHECKOUT</a> | <a href="./logout.php" class="adminlogout">LOGOUT</a> 
</div>
    

