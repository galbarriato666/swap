<?php
/*
Umar Mohammad Riaz
2B ASIXc
Exercici 3- Matrius
*/

// Matrius a operar
$matriu1 = [
    [63, 24, 23],
    [44, 23, 4],
    [15, 9, 49]
];

$matriu2 = [
    [6, 2, 2],
    [4, 2, 6],
    [1, 9, 4]
];

// funcio que suma les matrius
function sumarMatrius($matriu1, $matriu2) {
    $matriuSuma = [];
    if (count($matriu1) == count($matriu2) && count($matriu1[0]) == count($matriu2[0])) {
        for ($i=0; $i < count($matriu1); $i++) { 
            for ($j=0; $j < count($matriu1[$i]); $j++) { 
                $matriuSuma[$i][$j] = $matriu1[$i][$j] + $matriu2[$i][$j];
            }
        }
        return $matriuSuma;
    } else {
        return "Matrius no compatibles";
    }
}


// Funcion per multiplicar matrius
function multiplicarMatrius($matriu1, $matriu2) {
    if(count($matriu1[0]) != count($matriu2)){
        return "Matrius no compatibles";
    }
    else{
        $matriuMultiplicacio = [];
        for ($i=0; $i < count($matriu1); $i++){
            for($j=0; $j < count($matriu2[0]); $j++){
                $matriuMultiplicacio[$i][$j] = 0;
                for($x=0; $x < count($matriu2); $x++){
                    $matriuMultiplicacio[$i][$j] += $matriu1[$i][$x] * $matriu2[$x][$j];
                }
            }
        }
        return $matriuMultiplicacio;
    }
}

// funcio que calcula el numero més llarg de la matriu
function calculaNumeroMesLlarg($matriu){
    $max = 0;
    for ($i=0; $i < count($matriu); $i++) { 
        for ($j=0; $j < count($matriu[$i]); $j++) { 
            if (strlen($matriu[$i][$j]) > $max) {
                $max = strlen($matriu[$i][$j]);
            }
        }
    }
    return $max;
}

// funcio que calcula els caracters totals de la matriu
function calculaCaracters($lmatriu, $numeroMesLlarg) { 
    return $numeroMesLlarg * count($lmatriu) + count($lmatriu) - 1;
}

// funcio que imprimeix --
function printCapsalera($matriu, $numeroMesLlarg) {
    $caracters = calculaCaracters($matriu, $numeroMesLlarg);
    echo str_pad("--", $caracters) . "--\n";
}

// funcio que imprimeix la matriu
function imprimirMatriu($matriz) {
    if ($matriz != "Matrius no compatibles") {
        $numeroMesLlarg = calculaNumeroMesLlarg($matriz);
        $caracters = calculaCaracters($matriz, $numeroMesLlarg);
        printCapsalera($matriz, $numeroMesLlarg);
        for ($i=0; $i < count($matriz); $i++) {
            echo("|");
            for ($j=0; $j < count($matriz[$i]); $j++) { 
                if ($j == count($matriz[$i]) - 1) {
                    echo(str_repeat("0", $numeroMesLlarg - strlen($matriz[$i][$j])) . $matriz[$i][$j]);
                } else {
                    echo(str_repeat("0", $numeroMesLlarg - strlen($matriz[$i][$j])) . $matriz[$i][$j] . ",");
                }
            }
            echo "|\n";
        }
        printCapsalera($matriz, $numeroMesLlarg);
    } else {
        echo $matriz . "\n";
    }
}

// imprimim les matrius sumades
echo "Matriu1 + Matriu2: \n";
imprimirMatriu(sumarMatrius($matriu1, $matriu2));

// Imprimim les matrius multiplicades
echo "Matriu1 x Matriu2:\n";
imprimirMatriu(multiplicarMatrius($matriu1, $matriu2));

?>
