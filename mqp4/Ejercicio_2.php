<?php
/*
Miquel Regué Barrera
ASIXc 2B
Fecha 21/10/2022
*/

/* Ejercicio 2
Donada la fórmula del càlcul del volum d’un con:

Volumen = (pi * R(cuadrado) * altura)/3

crea una funció que calculi el volum de qualsevol.

*/
//Definir errores en el navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Fin de comandos de error


function Validacion_int($numero){
//Al convertir la entrada en integer, si no lo es, será un 0, por lo que en caso de que no lo seá, devolverá "true" 

	if ($numero<=0){
		print("Valor incorrecto\n");
	}
	else{
		return true;
		};
};

//Preguntamos el radio y altura en bucle hasta que se introduzca el valor correcto

$radio=(int)readline("Introduzca el valor del radio: \n");
while (Validacion_int($radio)!=True){
    $radio=(int)readline("Introduzca el valor del radio: \n");
};


$altura=(int)readline("Introduzca el valor de la altura : \n");
while (Validacion_int($altura)!=True){
    $altura=(int)readline("Introduzca el valor de la altura: \n");
};



function Volumen_cono($p_radio,$p_altura){
/*Calculo del volumen de un cono
input: dos valores (int), uno para el radio y otro para la altura
output: Volumen del cono 
*/
    $radio=$p_radio;
    $altura=$p_altura;
    $pi=pi();
    $volumen=($pi*(pow($radio,2)*$altura))/3;   
    return round($volumen,3);
};

echo('El volumen del cono es: '.Volumen_cono($radio,$altura));


print("\nFIN DEL JUEGO\n");

?>
