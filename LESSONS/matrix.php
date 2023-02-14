 Ejemplo 1: multiplicación de matrices simples

Para multiplicar dos matrices en PHP, se puede utilizar la función array_multisort(), la cual acepta dos arreglos bidimensionales como argumentos y devuelve el resultado de la multiplicación.
 
 
// Matrices a multiplicar
$matriz1 = array(
    array(1, 2),
    array(3, 4)
);

$matriz2 = array(
    array(5, 6),
    array(7, 8)
);

// Multiplicación de matrices
function multiplicar_matrices($matriz1, $matriz2) {
    $filas1 = count($matriz1);
    $columnas1 = count($matriz1[0]);
    $columnas2 = count($matriz2[0]);
    
    $resultado = array();
    
    for ($i = 0; $i < $filas1; $i++) {
        for ($j = 0; $j < $columnas2; $j++) {
            $total = 0;
            for ($k = 0; $k < $columnas1; $k++) {
                $total += $matriz1[$i][$k] * $matriz2[$k][$j];
            }
            $resultado[$i][$j] = $total;
        }
    }
    
    return $resultado;
}

// Resultado de la multiplicación de matrices
$resultado = multiplicar_matrices($matriz1, $matriz2);

// Imprimir resultado
foreach ($resultado as $fila) {
    foreach ($fila as $elemento) {
        echo $elemento . " ";
    }
    echo "<br>";
}



Ejemplo 2: multiplicación de matrices con números aleatorios

En este ejemplo, se generan dos matrices aleatorias de tamaño 3x3 y se multiplican utilizando la función multiplicar_matrices() del ejemplo anterior.

// Generar matrices aleatorias
$matriz1 = array(
    array(rand(1, 10), rand(1, 10), rand(1, 10)),
    array(rand(1, 10), rand(1, 10), rand(1, 10)),
    array(rand(1, 10), rand(1, 10), rand(1, 10))
);

$matriz2 = array(
    array(rand(1, 10), rand(1, 10), rand(1, 10)),
    array(rand(1, 10), rand(1, 10), rand(1, 10)),
    array(rand(1, 10), rand(1, 10), rand(1, 10))
);

// Multiplicación de matrices
$resultado = multiplicar_matrices($matriz1, $matriz2);

// Imprimir resultado
foreach ($resultado as $fila) {
    foreach ($fila as $elemento) {
        echo $elemento . " ";
    }
    echo "<br>";
}


Ejemplo 1: multiplicación de matrices y generación de tabla HTML

En este ejemplo, se multiplicarán dos matrices de tamaño 3x3 y se generará una tabla HTML con los resultados.



// Matrices a multiplicar
$matriz1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$matriz2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

// Multiplicación de matrices
function multiplicar_matrices($matriz1, $matriz2) {
    $filas1 = count($matriz1);
    $columnas1 = count($matriz1[0]);
    $columnas2 = count($matriz2[0]);
    
    $resultado = array();
    
    for ($i = 0; $i < $filas1; $i++) {
        for ($j = 0; $j < $columnas2; $j++) {
            $total = 0;
            for ($k = 0; $k < $columnas1; $k++) {
                $total += $matriz1[$i][$k] * $matriz2[$k][$j];
            }
            $resultado[$i][$j] = $total;
        }
    }
    
    return $resultado;
}

// Generación de tabla HTML
function generar_tabla($matriz) {
    echo "<table>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $elemento) {
            echo "<td>" . $elemento . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Resultado de la multiplicación de matrices
$resultado = multiplicar_matrices($matriz1, $matriz2);

// Generar tabla HTML con el resultado
generar_tabla($resultado);









Ejemplo 2: multiplicación de matrices con números aleatorios y generación de tabla HTML

En este ejemplo, se generan dos matrices aleatorias de tamaño 4x4 y se multiplican utilizando la función multiplicar_matrices() del ejemplo anterior. Luego, se genera una tabla HTML con los resultados.


// Generar matrices aleatorias
$matriz1 = array(
    array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)),
    array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)),
    array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)),
