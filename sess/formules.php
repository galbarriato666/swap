<?php

function validateCredentials (){

$userOK = "manu";
$passOK = "12345";
$adminOK = "admin";
$passminOK = "admin";

$username = $_POST["username"];
$password = $_POST["password"];

if (($username === $userOK && $password === $passOK) || ($username === $adminOK && $password === $passminOK) ){

    session_start();
    
    $_SESSION["username"] = $username; //AQUI ESTOY ASIGNANDO EL USERNAME QUE SE HA INTRODUCIDO (Solo puede ser Manu o admin, en la variable global)
    header("Location: prelogin.php"); //aqui quizas solo necesito llamar a la funcion? puedo llamar a otra funcion dentro de una funcion? 

} else {
    echo "<p><h1> WRONG CREDENTIALS: Seràs redirigit a l'inici </h1> </p>";
    header("refresh:3;url=autenti.html");
}

}

function prelogin() {
    session_start();
    
    $currentuser = $_SESSION["username"]; //lo mismo, vuelvo a guardar el user que hay en la variable global en esta variable local
            
    if ((!isset($_SESSION["username"])) || empty($_SESSION["username"])) { //intento quitar el isset a vber  k pasa 
               
        header("refresh:0;url=error.php");
        exit();
        
    } 
    
    
    else{
    
        header("refresh:0;url=pagina1.php");;
    
    }
    
    }
    // Hay que proteger la pagina1.php conforme si no hay datos correctos de la session, nos dé error y nos redirija al principio.  
    

function error(){

    echo "<h3>TE VAS FUERA, LISTILLO: TIENES QUE HACER LOGIN </h3>";

    header("refresh:2;url=autenti.html");

}

function destroy(){


    if (isset($_POST["sortir"])) {

        session_start(); 
        session_destroy(); 
        echo "<h2>LOGOUT SUCCESSFUL</h2>";
        header("refresh:1;url=autenti.html");
        exit();
    
    }
    
}

?>