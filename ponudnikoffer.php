<?php
require("./header.php");
?>

<div class="ponudnikijedi">
<a href="index.php">Pojdi nazaj na izbiro </a>
<p> IME JEDI | CENA | KATEGORIJA </p>
<?php
require_once "db.php";

$query = "SELECT * FROM jedi WHERE ponudnik_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$_GET['id']]);
if($stmt->rowCount() > 0){
while($row=$stmt->fetch()){
    $ime=$row['ime'];
    $id=$row['id'];
    $cena=$row['cena'];
    
    $ponudnikid = $_GET['id'];

    $katid = $row['kategorija_id'];
    $query1 = "SELECT * FROM kategorije WHERE id=?";
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute([$katid]);
    $data=$stmt1->fetch();


    echo "<p>".$ime." | ".$cena."€ | ".$data['ime']." | <a href='addtocart.php?id=".$id."&ponudnikid=".$ponudnikid."'> ADD TO CART</a></p>";
    }
}
?>
</div>


<?php
require("./footer.php");
?>