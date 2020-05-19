<?php
include_once './db.php';

$uid = $_POST['uid'];
$pass = $_POST['pass'];


if(!empty($uid) && !empty($pass)){
    $hash = hash('sha512', $pass.$salt);

    $query = "INSERT INTO uporabniki (uid,pass) VALUES (?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$uid,$hash]);
    

    header("Location:./login.php?register=success");
}else{
    header("Location:./register.php?error=error");
    die();

}



?>