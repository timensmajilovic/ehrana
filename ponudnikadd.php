<?php
include_once './db.php';

$uid = $_POST['uid'];
$pass = $_POST['pass'];
$ime = $_POST['ime'];


if(!empty($uid) && !empty($pass)){
    $hash = hash('sha512', $pass.$salt);

    $query = "INSERT INTO ponudniki (ime,uid,pass) VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$ime,$uid,$hash]);
    

    header("Location:./admin.php?ponudnikadd=success");
}else{
    header("Location:./admin.php?error=error");
    die();

}



?>