<?php
        $nom = isset($_REQUEST['nom']) ? $_REQUEST['nom'] : null;
        $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;

        $nomErr = $mailErr = "";
      
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (strlen ($_POST["nom"]) < 3) {
                    $nomErr = "* El campo nombre ha de tenir al menys 3 dígits";
                }

                if (empty($_POST["nom"])) { 
                    $nomErr = "* El camp Nom NO pot estar buit ";
                   
                } 

                
                if (empty($_POST["email"])) { // valida que no esté vacío
                    $mailErr = "* El camp email NO pot estar buit";
                    
                }
                                          
                if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $mailErr = "* Format d'email incorrecte! ";                    
                }                   

        }           
       
?>