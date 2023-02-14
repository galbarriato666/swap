<?php

$userOK = "manu";
$passOK = "12345";
$adminOK = "admin";
$passminOK = "admin";

$username = $_POST["username"];
$password = $_POST["password"];

if (($username === $userOK && $password === $passOK) || ($username === $adminOK && $password === $passminOK) ){

    session_start();
    
    $_SESSION["username"] = $username; //AQUI ESTOY ASIGNANDO EL USERNAME QUE SE HA INTRODUCIDO (Solo puede ser Manu o admin, en la variable global)
    header("Location: ./admin/prelogin.php"); //aqui quizas solo necesito llamar a la funcion? puedo llamar a otra funcion dentro de una funcion? 

} else {
    echo "<p><h1> WRONG CREDENTIALS: Seràs redirigit a l'inici </h1> </p>";
    header("refresh:3;url=autenti.html");
}

?>