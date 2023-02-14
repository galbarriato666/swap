<?php

session_start();

function checkSession() {

  if (!isset($_SESSION["username"]) || empty($_SESSION["username"])) {
    header("refresh:0;url=/ex11/privat/error.php");
    exit();
  } 
  
  else{
    session_start();
    $granted = $_SESSION["username"];
    return $granted;
  }
}

function destroy() {
  if (isset($_POST["sortir"])) {
    session_start(); 
    session_destroy(); 
    echo "<h2>LOGOUT SUCCESSFUL</h2>";
    header("refresh:1;url= ./../autenti.php");
    exit();
  }
}

function authenticateUser($username, $password) {

  session_start();

  if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

  $dbname = "mydb";
  $user = "phpmyadmin";
  $contraini = "12345";
  $servidor = "127.0.0.1";
  
  $conn = mysqli_connect($servidor, $user, $contraini, $dbname);
  if (!$conn) {
    die("Error fatal de la muerte mundial: " . mysqli_connect_error());
  }
  }
  
    $query = "SELECT * FROM users WHERE nom = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("error");
    }
    
    if (mysqli_num_rows($result) == 1) {
      $info = mysqli_fetch_assoc($result);
      $resultArray = array (
        'nom' => $info['nom'],
        'cognom' => $info['cognom'],
        'direccio' => $info['direccio'],
        'edad' => $info['edad'],
        'tarjeta_credit' => $info['tarjeta_credit']
    );
      
      $_SESSION["username"] = $username;
      $_SESSION['resultArray'] = $resultArray;
        header("refresh:0;url=./privat/privat.php");
        return $result;
        exit;
    } 
    else{
    
    echo "<p><h1> WRONG CREDENTIALS: Seràs redirigit a l'inici </h1> </p>";
    header("refresh:3;url=./autenti.php");
}
}


function mostraInfo($result){
  
  if (!$result) {
    die("No hay resultados para mostrar");
  }
  
  echo "<div class='container'>";

  echo  "<table border>";
  echo	"<tr>";
  echo		"<td align='center'> Nom d'usuari &nbsp </td> <td align='center'> Cognom &nbsp </td> <td align='center'> Direcció &nbsp </td> <td align='center'> Edat &nbsp </td> <td align='center'>Tarjeta de Crédit &nbsp </td>";
  echo	"</tr>";
  echo "<tr><td> " . $result["nom"]. "</td> <td>" . $result["cognom"]. "</td> <td>" . $result["direccio"]. "</td> <td>"  . $result["edad"]. "</td><td>" . $result["tarjeta_credit"]."</td></td>";
  echo "</table>";
  echo "</div>";

}

?>