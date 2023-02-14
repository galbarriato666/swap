<html>   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>   
   <body>


      <?php require_once "formules3.php";

$nom = isset($_REQUEST['nom']) ? $_REQUEST['nom'] : null;
$cognom = isset($_REQUEST['cognom']) ? $_REQUEST['cognom'] : null;
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$sexe = isset($_REQUEST['sexe']) ? $_REQUEST['sexe'] : null;
$idioma = isset($_REQUEST['idioma']) ? $_REQUEST['idioma'] : null;
$carrer = isset($_REQUEST['carrer']) ? $_REQUEST['carrer'] : null;
$numer = isset($_REQUEST['numer']) ? $_REQUEST['numer'] : null;
$city = isset($_REQUEST['city']) ? $_REQUEST['city'] : null;
$provincia = isset($_REQUEST['provincia']) ? $_REQUEST['provincia'] : null;
$codipost = isset($_REQUEST['codipost']) ? $_REQUEST['codipost'] : null;
$infoAdd = isset($_REQUEST['infoAdd']) ? $_REQUEST['infoAdd'] : null;


$nomErr = $nomErr2 = $nomErrNum = $cognomErr = $cognomErr2 = $cognomErrNum = $mailErr = $sexErr = $idiomaErr = $carrerErr = $numerErr = $cityErr = $provinciaErr = $codipostErr = $infoAddErr = "";



   if ($_SERVER["REQUEST_METHOD"] == "POST") { 

      if (NoBuit($nom)){
            $nomErr = "El campo no puede estar vacío!";
      }        
      
      if (llargada("nom")){
            $nomErr2 = "El campo debe tener +5 caractéres";
      }

      if (notNumeric("nom")){
         $nomErrNum = "El campo no puede ser numérico!";
      }

      if (NoBuit($cognom)== true){
         $cognomErr = "El campo no puede estar vacío!";
      }
      
      if (llargada($cognom)){
         $cognomErr2 = "El campo debe tener +5 caractéres";
      }

      if (notNumeric($cognom)){
         $cognomErrNum = "El campo no puede ser numérico!";
      }

      if (NoBuit($email)){
         $mailErr = "El campo no puede estar vacío!";
      }

      if (ValidMail($email)){
         $mailErr = "Formato de email no válido";
      }

      if(NoBuit($sexe)){
         $sexErr = "Debes escoger un género binario";
      }

      if (NoBuit($idioma)){
         $idiomaErr = "ESCOGE UN IDIOMA!";

      }

      if (idioma($idioma)){
         $idiomaErr = "ESCOGE UN IDIOMA!";

      }

      if (NoBuit($carrer)){
         $carrerErr = "El campo no puede estar vacío!";

      }

      if (llargadaCinc($carrer)){
         $carrerErr = "El campo debe ser mayor de 5 caractéres";
      }

      if (NoBuit($numer)){
         $numerErr = "El campo no puede estar vacío!";
      }

      if (is_numeric($numer)){
         $numerErr = "El campo debe ser numérico";

      }

      if (NoBuit($city)){
         $cityErr = "El campo no puede estar vacío!";
      }

      if (llargadaTres($city)){
         $cityErr = "El campo debe ser +3 char";
      }

      if (NoBuit($provincia)){
         $provinciaErr = "El campo no puede estar vacío!";
      }

      if (provincias($provincia)){
         $provinciaErr = "Escriba usted bien la provincia!";
      }

      if (NoBuit($codipost)){
         $codipostErr = "El campo no puede estar vacío!";
      }

      if (is_numeric($codipost)){
         $codipostErr = "El campo debe ser numérico";

      }

      if (maxChar($infoAdd)){
         $infoAddErr = "Debe tener una longitud de +4 y -256 char";
      }
   }
?>      
           
      <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">         
         <table>
            <tr>
               <td> <h4>Nom:</h4></td>
               <td><input type = "text" name = "nom"/>
                  <span class = "error"> <?php echo $nomErr;?></span>
               </td>
            </tr>

            <tr>
               <td> <h4>Cognom:</h4></td>
               <td><input type = "text" name = "cognom"/>
                  <span class = "error"> <?php echo $nomErr;?></span>
               </td>
            </tr>
           
            <tr>
            <td> <h4>E-mail:</h4> </td>
                <td><input type = "text" name = "email"/>
                  <span class = "error"> <?php echo $mailErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td><h4>Sexe:</h4></td>
               <td>
                  <input type = "radio" name = "sexe" value = "FEM"> FEM
                  <input type = "radio" name = "sexe" value = "MASC"> MASC 
                  <span class = "error"> <?php echo $sexErr;?></span>
               </td>
            </tr>

            <tr>
               <td><h4>Idioma</h4>

               <select name="idioma" > //

                <option value="ESCULL" selected>Escull </option>

                <option value="ESP">Español</option>

                <option value="CAT">Catalán</option>

                <option value="ENG">Inglés</option>
                
                </select>
                <span class = "error"> <?php echo $idiomaErr;?></span>
               </td>
            </tr>
            
            

            <td> </br></br><h4>Adreça</h4></br></br></td>
            
            <td>
            <input type="text" name="carrer" placeholder="Carrer"/> 
            <span class = "error"><?php echo $carrerErr;?></span>                
            <input inputmode="numeric" name="numer" placeholder="Número"/> 
            <span class = "error"><?php echo $numerErr;?></span>                
            <input type="text" name="city" placeholder="Ciutat" /> 
            <span class = "error"><?php echo $cityErr;?></span>    
            <input type="text" name="provincia" placeholder="Provincia" /> 
            <span class = "error"> <?php echo $provinciaErr;?></span> 
            <input inputmode="numeric" name="codipost" placeholder="Codi Postal" /> 
            <span class = "error"> <?php echo $codipostErr;?></span>
            </td>
                                      
            <tr>
               <td></br> </br><h4>Info Adicional :</h4></br></br> </td>
               <td> <textarea name = "infoAdd" cols = "50" rows = "6" ></textarea></td>               
            </tr>
            <td>
            <span class = "error"> <?php echo $infoAddErr;?></span>	
            </td>
           
            <td>
               <input type = "submit" name= "submit" value = "Enviar"> 
            </td>
				
        </table>
			
      </form>   
   </body>
</html>