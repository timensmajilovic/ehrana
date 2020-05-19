<?php
include_once './db.php';

$ime = $_POST['ime'];


if(!empty($ime)){

    $query = "INSERT INTO kategorije (ime) VALUES (?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$ime]);
    

    header("Location:./admin.php?categoryadd=success");
}else{
    header("Location:./admin.php?error=error");
    die();

}



?>