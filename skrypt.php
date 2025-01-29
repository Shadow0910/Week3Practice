<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<title>Result</title>
</head>
<body>
<style>
#con {
    background: rgba(0,0,0,0.65);
    left: 12.5%;
    height: auto;
    width: 75%;
    position: fixed;
    top: 30%;
    color: #FFDCE4;
    border-radius: 20px;
    padding: 1%;
    text-align: center;
    font-size: xx-large;
}
</style>
</body>
</html>
<?php 
$user = "root";
$host = "localhost";
$pass = "";
$db = "baza_dannych";

$id = $_POST['id'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$ocena = $_POST['ocena'];
$czy_zdaje_z_praktyk = $_POST['czy_zdaje_z_praktyk'];
$czy_zdaje_z_baz_dannych = $_POST['czy_zdaje_z_baz_dannych'];
$czy_gra_genshina = $_POST['czy_gra_genshina'];

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("nie działa połączenie" . mysqli_connect_error());
}

$sql = "INSERT INTO klasa2c (imie, nazwisko) VALUES ('$imie', '$nazwisko')";
$sql = "UPDATE klasa2c SET ocena = '$ocena', czy_zdaje_z_praktyk = '$czy_zdaje_z_praktyk', czy_zdaje_z_baz_dannych = '$czy_zdaje_z_baz_dannych', czy_gra_genshina = '$czy_gra_genshina' WHERE id = '$id'";
$sql = "DELETE FROM `klasa2c` WHERE `klasa2c`.`id` = $deleteid";
if (mysqli_query($con, $sql)){
    echo '<div id="con">';
    echo '<h1>Result:</h1><br><h2>Added record</h2>';
    echo '</div>';
}
else{
    echo '<div id="con">';
    echo '<h1>Result:</h1><br><h2>Error</h2>';
    echo '</div>';
}

mysqli_close($con);
?>