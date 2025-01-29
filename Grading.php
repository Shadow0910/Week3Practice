<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/run-php/css.css">
    <title>Grading system</title>
</head>
<body>

<div id="vignette">
</div>

<header>
<h1><a href="/run-php/Main.php">Main</a></h1>
<h1><a href="/run-php/Addition.php">Addition</a></h1>
<h1><a href="/run-php/Grading.php">Grading</a></h1>
<h1><a href="/run-php/AndimGoingBackToFiveoFive.php">Huh?</a></h1>
</header>

<video autoplay muted loop id="vid">
    <source src="/run-php/Assets/background.mp4" type="video/mp4">
</video>

<div id="container">
<h1>Grading system</h1>
    <form method="post" action="skrypt.php" >
        <label>Id:</label>
        <input type="number" name="id" id="id" required><br>
        <label">ocena:</label>
        <input type="number" name="ocena" id="ocena" required min="1" max="6"><br>
        <label>Czy zdaje z praktyk?</label>
        <input type="text" name="czy_zdaje_z_praktyk" id="czy_zdaje_z_praktyk" min="1" max="10" required><br>
        <label>Czy zdaje z baz dannych?</label>
        <input type="text" name="czy_zdaje_z_baz_dannych" id="czy_zdaje_z_baz_dannych" min="1" max="10" required><br>
        <label>Czy gra genshina?</label>
        <input type="text" name="czy_gra_genshina" id="czy_gra_genshina" min="1" max="10" required>
        <button type="submit">Grade</button>
    </form>
</div>

</body>
</html>