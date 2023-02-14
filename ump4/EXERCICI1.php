<?php

/* 
Umar Mohammad Riaz
2B ASIXc
Exercici 1 - Dividir paraula entre vocals i consonants
*/

// Definim la la paraula a procesar

$paraula = "otorrinolaringologo";

function esVocal($string) {     //funcio per saber si es vocal
    $vocals = array('a', 'e', 'i', 'o', 'u');
    $stringVocals = "";
    for ($i=0; $i < strlen($string); $i++) { 
        if (in_array(strtolower($string[$i]), $vocals)) {
            $stringVocals .= $string[$i];
        }
    }
    return $stringVocals;
}

function esConsonant($string) {    //funcio per saber si es consonant
    $vocals = array('a', 'e', 'i', 'o', 'u');
    $stringConsonants = "";
    for ($i=0; $i < strlen($string); $i++) { 
        if (!in_array(strtolower($string[$i]), $vocals)) {
            $stringConsonants .= $string[$i];
        }
    }
    return $stringConsonants;
}

function separarVocalsDeConsonants($string) {   //funcio per retornar vocals i consonants separats
    return esVocal($string) . esConsonant($string) . "\n";
}

echo(separarVocalsDeConsonants($paraula));

?>
