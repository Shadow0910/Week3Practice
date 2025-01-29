<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/run-php/css.css">
    <title>Main</title>
</head>
<body>
    
<div id="vignette">
</div>
<video autoplay muted loop id="vid">
    <source src="/run-php/Assets/background.mp4" type="video/mp4">
</video>
<header>
<h1><a href="/run-php/Main.php">Main</a></h1>
<h1><a href="/run-php/Addition.php">Addition</a></h1>
<h1><a href="/run-php/Grading.php">Grading</a></h1>
<h1><a href="/run-php/AndimGoingBackToFiveoFive.php">Huh?</a></h1>
</header>

<div id="container">
<h1>Klasa 2c</h1>
<h2>
<?php 

$user = "root";
$host = "localhost";
$pass = "";
$db = "baza_dannych";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("nie działa połączenie" . mysqli_connect_error());
}

$sql = "SELECT * FROM klasa2c";

$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res) >0){
    while($row = mysqli_fetch_assoc($res)){
        echo "<div id='ok'>Id: " .$row['id'] . " <br>| Imię: " . $row['imie'] . "<br>| Nazwisko to: " . $row['nazwisko'] . "<br>| Ocena: " . $row['ocena'] . "<br>| Czy zdaje z praktyk: " . $row['czy_zdaje_z_praktyk'] . "<br>| Czy zdaje z baz dannych: " . $row['czy_zdaje_z_baz_dannych'] . "<br>| Czy pykczy genshina: " . $row['czy_gra_genshina'] . "</div><br>";
    }
}
else{
    echo "coś nie pykczy";
}
mysqli_close($con);
?>
</h2>
</div>

</body>
</html>