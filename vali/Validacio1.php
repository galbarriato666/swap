<html>
<head>
<title>Formulari Autentificació</title>
<style> .error {color: #FF0000;} </style>
</head>
<body>
    <?php require_once "formules.php" ?>
<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
    <b>Nom: <input type="text" name="nom" /> </b>
    <span class="error"> <?php echo $nomErr;?></span>   
<br/>
    <b>E-mail: <input type="text" name="email" /> </b>
    <span class="error"><?php echo $mailErr;?></span>    
<br/>
    <input type="submit" value="Enviar" /> <br/>
    <?php require "formules2.php" ?></span>
<br/>
</form>
</body>
</html>