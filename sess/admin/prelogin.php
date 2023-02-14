<?php 
session_start();
    
$currentuser = $_SESSION["username"]; 
        
if ((!isset($_SESSION["username"])) || empty($_SESSION["username"])) { //intento quitar el isset a vber  k pasa 
           
    header("refresh:0;url=error.php");
    exit();
    
} 

else{

    header("Location: pagina1.php");;

}
?>