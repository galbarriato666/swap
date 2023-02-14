<?php

/* 
Umar Mohammad Riaz
2B ASIXc
Exercici 2 - Calcula el volum d’un con
*/

// demanem a l'usuari que introdueixi les dades
// $radi = readline("Introdueix el radi del con: ");
// $altura = readline("Introdueix l'altura del con: ");

// Com estem provant el codi, les definim nosaltres:
$radi = 5;
$altura = 10;

function volumCon($radi, $altura) {   //funcio per calcular el volum del con
    return ($radi ** 2 * pi() * $altura) / 3; 
}

// comprovem que les dades introduides siguin numeros
if (is_numeric($radi) && is_numeric($altura)) {
    // calculem el volum del con
    echo(round(volumCon($radi, $altura), 2) . " m3\n");  //mostrem el resultat amb 2 decimals de precisió 
} else {
    echo("Les dades introduides no son correctes!!!\n");
}

?>