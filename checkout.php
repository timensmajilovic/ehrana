<?php
require("./header.php");
?>

<div class="ponudniklist">
<a href="index.php">Pojdi nazaj na izbiro </a>
<p> IME JEDI | CENA | KATEGORIJA </p>
<?php
require_once "db.php";

$query = "SELECT * FROM carts WHERE uporabnik_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$_SESSION['id']]);
if($stmt->rowCount() > 0){
while($row=$stmt->fetch()){

    $query2 = "SELECT * FROM jedi WHERE id=?";
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute([$row['jed_id']]);
    $data1=$stmt2->fetch();

    $ime=$data1['ime'];
    $id=$data1['id'];
    $cena=$data1['cena'];

    $katid = $data1['kategorija_id'];
    $query1 = "SELECT * FROM kategorije WHERE id=?";
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute([$katid]);
    $data=$stmt1->fetch();


    echo "<p>".$ime." | ".$cena."€ | ".$data['ime']." | <a href='odstranifood.php?id=".$data1['id']."'>Odstrani</a></p>";
    }
}
?>
<a href="preklicnarocila.php">Končaj z nakupom </a> | <a href="preklicnarocila.php">Prekliči nakup </a> 
</div>


<?php
require("./footer.php");
?>