<?php
include_once './db.php';
session_start();
$jedid = $_GET['id'];
$uporabnikid = $_SESSION['id'];
$ponudnikid = $_GET['ponudnikid'];

if(!empty($jedid) && !empty($uporabnikid)){

    $query = "INSERT INTO carts (jed_id,uporabnik_id) VALUES (?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$jedid,$uporabnikid]);
    

    header("Location:./ponudnikoffer.php?id=".$ponudnikid."&cartadd=success");
}else{
    header("Location:./ponudnikoffer.php?id=".$ponudnikid."&cartadd=error");
    die();

}



?>