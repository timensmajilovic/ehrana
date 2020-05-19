<?php 
include_once './db.php';
$id=$_GET['id'];
session_start();
$uporabnikid = $_SESSION['id'];

$query = "DELETE FROM carts WHERE jed_id=? AND uporabnik_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id,$uporabnikid]);

header('Location: checkout.php?jed=deleted');
?>