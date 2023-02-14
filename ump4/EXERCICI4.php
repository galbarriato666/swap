<?php
/*
Umar Mohammad Riaz
2B ASIXc
Exercici 4 - Producte de matrius continuació
*/

// matriu a imprimir
$matriu = [
    [63, 24, 44423],
    [44, 23, 4],
    [15, 9, 49]
];

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


// funcio que imprimeix la matriu amb el format correcte
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

imprimirMatriu($matriu);

?>