<?php
/*
Miquel Regué Barrera
ASIXc 2B
Fecha 21/10/2022
*/

/* Ejercicio 3
Crea un script amd dues funcions, les matrius poden ser NxN:

Una altra que imprimeixMatrius
Una que sumi matrius 
Una altra que multipliqui matrius 
*/

//Definir errores en el navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Fin de comandos de error

//Al asignar (int) antes de readline conseguimos que todo lo que no sea integer lo convierta en 0(False)
//Ahora podemos filtrar con un rango en IF

function menu(){
/*Definimos un menu para el usuario
input: ""
output: int - Valor de la opcón elegida (1-5)
*/
    echo("\n");
    echo ("¿Qué desea hacer?: \n
    [1]Imprimir matrices\n
    [2]Sumar matrices\n
    [3]Multiplicar matrices\n
    [4]Imprimir con formato \n 
    [5]Salir \n");
    $opcion=(int)readline("opcion: ");
    return $opcion;
}
        
function Validacion_int($numero){
/*Validadores de integer
input: int - Número
output: boolean - True o False
*/           
    if ($numero<=0){
        print("Valor incorrecto\n");
        }
        else{
            return true;
        };
};
function crear_matriz($tamaño){
/*Creación aleatoria de una matriz NxN
input: int - Número
output: array - Matriz de tamaño definido por usuario
*/  
    $matriz = array ();
    for($i=0;$i<$tamaño;$i++){
        for ($j=0;$j<$tamaño;$j++){
            $matriz[$i][$j] = $aleatorio=rand(0,10000);
        };
    };
    return $matriz;
};
function crear_muchas_matrices($cantidad,$tamaño){
/*Crea N cantidad de matrices NxN y lo devuelve en una matriz de matrices
input: $cantidad (int) -numero: $tamaño (int) -numero:
output: array - Matriz de matrices. 
*/ 
    $matriz_de_matrices = array ();

    for($i=0;$i<$cantidad;$i++){
        $matriz_de_matrices[$i] = crear_matriz($tamaño);
    };
    return $matriz_de_matrices;

};
function imprimir_matriz($matriz){
/*Recibida una matriz, imprime cada elemento y añade formato
input: array - Matriz
output: 
*/ 
        for($i=0; $i<count($matriz); $i++){ 
            for($j=0; $j<count($matriz); $j++){
                echo $matriz[$i][$j];
                echo " ";
            }
            echo ("\n");
        }
};

function sum_matriz($matriz1, $matriz2){
/*Recibida dos matrices, realiza la operación de suma
input: $matriz1: array - Matriz $matriz2: array -Matriz
output: $suma: array - Matriz
*/ 
    $suma = array(); // Iniciamos la matriz de resultados
        for($i=0; $i<count($matriz1); $i++){ 
            $suma[] = array();
                for($j=0; $j<count($matriz1[$i]); $j++){
                    $suma[$i][] = $matriz1[$i][$j]  + $matriz2[$i][$j];
                }
            }
        return $suma;
};
function mult_matriz($matriz1, $matriz2){
/*Recibida dos matrices, realiza la operación de multiplicación de matrices
input: $matriz1: array - Matriz $matriz2: array -Matriz
output: $multiplicacion: array - Matriz
*/
    $multiplicacion = array(); // Iniciamos la matriz de resultados
        for($i=0; $i<count($matriz1); $i++){ 
                for($j=0; $j<count($matriz1); $j++){
                    $multiplicacion[$i][$j] = 0;
                    for($k=0; $k<count($matriz1); $k++){
                        $multiplicacion[$i][$j] = $multiplicacion[$i][$j] + ($matriz1[$i][$k]  * $matriz2[$k][$j]);
                    }
                }
            }
        return $multiplicacion;
};


//Preguntamos al usuario por la cantidad y tamaño de las matrices a crear
$cantidad=(int)readline("¿Cuántas matrices quieres?: \n");
while (Validacion_int($cantidad)!=True){ 
    $cantidad=(int)readline("¿Cuántas matrices quieres?: \n");
};
        
$tamaño=(int)readline("Introduzca el tamaño de su matriz: \n");
while (Validacion_int($tamaño)!=True){
    $tamaño=(int)readline("Introduzca el tamaño de su matriz: \n");
};
        
//Creamos la cantidad de matrices definidas por usuario.
$matriz_de_matrices =  crear_muchas_matrices($cantidad,$tamaño);

$opcion = 0;
//Definimos un while para entrar dentro de un menu hasta pulsar "Salir[5]".
while ($opcion != 5){

    $opcion = menu();
    while ($opcion<=0 and $opcion > 5){ 
            $opcion = menu();
    };

    switch($opcion){
        case 1:
        //Ver matrices
            echo ("--------------\n");
            for ($i=0;$i<count($matriz_de_matrices);$i++){
                echo("Matriz_".($i+1).("\n"));
                imprimir_matriz($matriz_de_matrices[$i]);
                echo "\n";
                };
            break;
        case 2:
        //Definimos una matriz que igualamos a la primera de nuestras matrices y pasamos una a una el resto por la función
            $matriz_sumada=$matriz_de_matrices[0];
            for ($n=1;$n<count($matriz_de_matrices);$n++){
            $matriz_sumada=sum_matriz($matriz_sumada,$matriz_de_matrices[$n]);
            };
            echo "La suma de las matrices es: \n";
            echo "-------------------------\n";
            imprimir_matriz($matriz_sumada);
            break;
        case 3:
        //Definimos una matriz que igualamos a la primera de nuestras matrices y pasamos una a una el resto por la función
            $matriz_multiplicada=$matriz_de_matrices[0];
            for ($n=1;$n<count($matriz_de_matrices);$n++){
            $matriz_multiplicada=mult_matriz($matriz_multiplicada,$matriz_de_matrices[$n]);
            };
            echo "La multiplicación de las matrices es: \n";
            echo "-------------------------\n";
            imprimir_matriz($matriz_multiplicada);
            break;
        case 4:
            echo "En desarrollo \n";
        break;

    };

};



?>