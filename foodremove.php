<?php 
include_once './db.php';
$id=$_GET['id'];

$query = "DELETE FROM jedi WHERE id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);

header('Location: ponudnik.php?jed=deleted');
?>