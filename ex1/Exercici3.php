<?php
    $aleatori = rand(1,10);
    $condition = 0;
    $attempt = 5;

    while ($condition === false && $attempt > 0) {
        $input = readline("Introdueix un número del 1 al 10: ");
        if (is_numeric($input)){
            if ($input >=1 && $input <= 10){
                if ($input > $aleatori){
                    echo "T'has quedat llarg \n" ; }
                elseif ($input < $aleatori) {
                    echo "T'has quedat curt \n" ; }
                else {
                    $condition = 1 ; }
        
                }
            
            else{
                echo "nº fora de rang!" ;
               }     

            }
 
        else {
            echo "La entrada no es numérica \n" ;
            }
             
        
        echo "Et queden " . $attempt . "oportunitats \n";
        $attempt --;
    }

     if ($condition === 1)       {
        echo "has guañat el joc!!!!"; }
    else {
        echo "has perdut il giocco!!!" ; }
?>        
        
        
        
        
        

