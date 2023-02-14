<?php
/*
Miquel Regué Barrera
ASIXc 2B
Fecha 21/10/2022
*/

/* Ejercicio 1
Escriviu una  funció  separarVocalsDeConsonants() que prengui com a entrada una cadena,
la trenqui i la retorni amb vocals primer, consonants segon. 
Per a qualsevol caràcter que no sigui vocal (com ara ?!# etc  o espais especials), tracta-ho com a consonants.

*/
//Definir errores en el navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Fin de comandos de error

function EsVocal($p_letra){
/*Resuelve si una letra es vocal o no.
input: (str)Letra
output: (Boolean) true o false
*/
    $vocales=array("a","e","i","o","u");
    $p_letra_min=strtolower($p_letra);
    $resultado=false;
    foreach ($vocales as $individual){
        if ($p_letra_min == $individual){
            $resultado=true;
        };
    };
    return $resultado;

};


$frase_separar=readline("Introduzca su frase y la separaremos en vocales y consonantes: \n");

function SepararVocalesDeConsonantes($string){
/*Separa un string en vocales y consonantes
input: (string) Cadena de texto
output: (string) Cadena de texto separada entre vocales y consonantes
*/
    $vocales="";
    $consonantes="";

    for($i=0;$i<strlen($string);$i++){
        if (EsVocal($string[$i])==true){
            $vocales.=$string[$i];
        }
        else{
            $consonantes.=$string[$i];
        };
    };
    $letras_separadas=$vocales.$consonantes;
    return $letras_separadas;
};

echo ("Su frase ordenada es: ".SepararVocalesDeConsonantes($frase_separar));

print("\nFIN DEL JUEGO\n");

?>
