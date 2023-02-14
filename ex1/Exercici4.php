<?php

$dia_angles = date ( 'D' );

if ($dia_angles == "Mon") { echo "Hoy es LUNES" ;}
elseif ($dia_angles == "Tue") { echo "Hoy es MARTES" ; }
elseif ($dia_angles == "Wed") { echo "Hoy es MIERCOLES" ; }
elseif ($dia_angles == "Thu") { echo "Hoy es JUEVES" ; }
elseif ($dia_angles == "Fri") { echo "Hoy es VIERNES" ; }
elseif ($dia_angles == "Sat") { echo "Hoy es SÁBADO" ; }
elseif ($dia_angles == "Sun") { echo "Hoy es DOMINGO" ; }
else { echo "INPUT ERROR "; }

/*Realitza un script indicant el dia de la setmana, tingueu en compte que el servidor ens proporciona el dia en anglès mitjançant la funció date ().

Ajuda de l'exercici:

La funció date () amb el paràmetre 'D' , ens retorna les tres primeres lletres del dia de la setmana en anglès: Mon, Tue, Wed, Thu, Fri, Sat, Sun.

Amb aquest petit codi $dia_ingles = date( 'D'); tindrem el dia a la variable $dia_ingles.

Mostra el dia per pantalla amb el missatge: "El dia de la setmana és: XXXX".

Per resoldre el problema haurem de saber fer comparacions de variables de tipus text, imprimir text per pantalla i utilitzar correctament els condicionals if amb les seves sentències opcionals else if i else.

Com resolc l'exercici? Doncs comparant una a un els set possibles valors de la variable 
$dia_angles */

?> 