<?php
require("./header.php");
?>

<div class="ponudniklist">
<?php
require_once "db.php";

$query = "SELECT * FROM ponudniki";
$stmt = $pdo->prepare($query);
$stmt->execute();
if($stmt->rowCount() > 0){
while($row=$stmt->fetch()){
    $ime=$row['ime'];
    $id=$row['id'];
    echo "<p><a href='ponudnikoffer.php?id=".$id."'>".$ime."</a></p>";
    }
}
?>
</div>


<?php
require("./footer.php");
?>