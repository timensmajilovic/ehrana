<?php 
include_once './db.php';
session_start();
$uporabnikid = $_SESSION['id'];

$query = "DELETE FROM carts WHERE uporabnik_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$uporabnikid]);

header('Location: checkout.php?cart=deleted');
?>