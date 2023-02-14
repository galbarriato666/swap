<?php 

session_start();
    
$currentuser = $_SESSION["username"]; //lo mismo, vuelvo a guardar el user que hay en la variable global en esta variable local
        
if ((!isset($_SESSION["username"])) || empty($_SESSION["username"])) { //intento quitar el isset a vber  k pasa 
           
    header("refresh:0;url=error.php");
    exit();
    
} 


// Hay que proteger la pagina1.php conforme si no hay datos correctos de la session, nos dé error y nos redirija al principio.  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagina LOGIN OK Benvingut!</title>
</head>
<body>

<h1> <?php  echo "Hello " . $currentuser . " !!" . "<br>" . " Welcome To Página de LOGIN" ?> </h1> 

<p> Ahora sólo puedes quedarte aquí o salir </p>

<br/>

<form action="destroy.php" method="POST">
<button name="sortir" type="submit">sortir</button>
</form>

</body>
</html>