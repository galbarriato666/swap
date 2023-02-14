<?php 
require 'formules.php';
checkSession();
$currentuser = checkSession();
$result = $_SESSION['resultArray'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Acceso Privado OK: Benvingut!</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="otro"> <h1> <?php  echo "Hello " . $currentuser . " !!" . "<br>" . " Welcome to: TODOS TUS DATOS " ?> </h1> </div>


<?php mostraInfo($result) ?>

<div class="otro2">
<p>Puedes quedarte aquí o salir</p>

<br/>

<form action="destroy.php" method="POST">
<button name="sortir" type="submit">sortir</button>
</form>
</div>
</body>
</html>

