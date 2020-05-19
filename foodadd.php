<?php
include_once './db.php';

$ime = $_POST['ime'];
$cena = $_POST['cena'];
$katid = $_POST['katid'];
$ponid = $_POST['ponid'];


if(!empty($ime) && !empty($cena) && !empty($katid) && !empty($ponid)){

    $query = "INSERT INTO jedi (ime,cena,kategorija_id,ponudnik_id) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$ime,$cena,$katid,$ponid]);
    

    header("Location:./ponudnik.php?foodadd=success");
}else{
    header("Location:./ponudnik.php?error=error");
    die();

}



?>