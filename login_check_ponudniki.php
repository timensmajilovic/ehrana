<?php
session_start();
include_once './db.php';
   

$puid = $_POST['uid'];
$ppass = $_POST['pass'];


//preverim, če sem prejel podatke
if (!empty($puid) && !empty($ppass)) {
    //$pass = sha1($pass.$salt);
    $query = "SELECT * FROM ponudniki WHERE uid=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$puid]);
    
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
        $hash = hash('sha512', $ppass.$salt);

        if ($hash == $user['pass']) {
            $_SESSION['puid'] = $user['uid'];
            $_SESSION['pid'] = $user['id'];
            $_SESSION['pime'] = $user['ime'];
            

            header("Location:./ponudnik.php");
            die();
        }
        else{
            header("Location:./ponudniklogin.php?error=wrongcreds");
            die();
        }
    }
}
else{
    header("Location:./ponudniklogin.php?error=error");
    die();
}
header("Location:./ponudniklogin.php");
            die();
?>