<?php 
if (!session_id()) {
    session_start();
}

if(!isset($_SESSION['pid'])){
    header("Location:./login.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eHrana - Ponudnik</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    

<div class="admintitle"> 
    <p>
        eHrana PONUDNIK - <?php echo $_SESSION['pime'];  ?> 
    </p>
    <a href="./logout.php" class="adminlogout">LOGOUT</a>
</div>

<div>
    <div class="foodform">
        <form action="foodadd.php" method="post">
            Ime Jedi
        <input type="text" placeholder="Vnesi ime jedi" name="ime" required>
            Cena
        <input type="text" placeholder="Vnesi ceno jedi" name="cena" required>
            Kategorija
            <select name="katid">
<option value="no">Izberi kategorijo</option>
<?php
require_once "db.php";

$query = "SELECT * FROM kategorije";
$stmt = $pdo->prepare($query);
$stmt->execute();
if($stmt->rowCount() > 0){
while($row=$stmt->fetch()){
    $ime=$row['ime'];
    $id=$row['id'];
    echo "<option value='".$id."'>".$ime."</option>";
    }
}
?>
</select>

        <input type="text" placeholder="Vnesi kategorijo jedi" name="ponid" value='<?php echo $_SESSION['pid'] ?>' required hidden>
        <button type="submit">Dodaj</button>  
        </form>
    </div>


<div class="ponudnikijedi">
<p> IME JEDI | CENA | KATEGORIJA </p>
<?php
require_once "db.php";

$query = "SELECT * FROM jedi WHERE ponudnik_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$_SESSION['pid']]);
if($stmt->rowCount() > 0){
while($row=$stmt->fetch()){
    $ime=$row['ime'];
    $id=$row['id'];
    $cena=$row['cena'];
    
    $katid = $row['kategorija_id'];
    $query1 = "SELECT * FROM kategorije WHERE id=?";
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute([$katid]);
    $data=$stmt1->fetch();


    echo "<p>".$ime." | ".$cena."€ | ".$data['ime']." | <a href='foodremove.php?id=".$id."'> Remove</a></p>";
    }
}
?>
</div>



</div>

</body>
</html>