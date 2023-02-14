<?php 

if (isset($_POST["sortir"])) {

    session_start(); 
    session_destroy(); 
    echo "<h2>LOGOUT SUCCESSFUL</h2>";
    header("refresh:1;url= ./../autenti.html");
    exit();

}

?>