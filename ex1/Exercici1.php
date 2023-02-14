<?php
  $entrada = readline('Introdueix des de l\'entrada standard: ');
  #echo $entrada;

  
    for ($index = 1; $index <= 10; $index++) { # index empieza por 1; segunda condicion que sea menor de 10; i que vaya sumando index++ 
      $cadena .=  $entrada . " * " . $index . " = " . $entrada*$index . "\n"; #guardo en cadena = entrada + * + index + = + entrada x index + \n 
  }
  print($cadena); #print resultado
  
  /* Crea un programa que demani un número entre el 1 i el 10 generi la següent sortida . 
Mitjançant la funció readline. Controla que l’entrada sogui un nombre del 1 al 10!!! */

?>