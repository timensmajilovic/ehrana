<?php
session_start();
include_once './db.php';
   

$uid = $_POST['uid'];
$pass = $_POST['pass'];
echo $uid;
echo $pass;

//preverim, če sem prejel podatke
if (!empty($uid) && !empty($pass)) {
    //$pass = sha1($pass.$salt);
    $query = "SELECT * FROM uporabniki WHERE uid=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$uid]);
    
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
        $hash = hash('sha512', $pass.$salt);
        $validPassword = password_verify($pass, $user['pass']);

        if ($hash == $user['pass']) {
            $_SESSION['uid'] = $user['uid'];
            $_SESSION['id'] = $user['id'];
            

            header("Location:./index.php");
            die();
        }
        else{
            header("Location:./login.php?error=wrongcreds");
            die();
        }
    }
}
else{
    header("Location:./login.php?error=error");
    die();
}
header("Location:./login.php");
            die();
?>