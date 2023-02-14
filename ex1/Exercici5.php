
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> MY PYRAMID </title>
</head>
<body>

<?php

$blocks=20; 
for ($line=1;$line<$blocks + 1;$line++){
    $blocks--;
    echo("<br>");
    echo str_repeat("&nbsp",$blocks);
    echo str_repeat("* ",$line);
};

/*Crea un programa que dibuiju una piramides d’asteriscos, la sequencia d’escap de l’espay en blanc amb html es "&nbsp" */

?> 
</body>
</html>