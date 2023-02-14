<?php              
      
function NoBuit($value) {
             if (empty($value)) {                
                return true;                
             }

            }

        function llargada($value){
            if (strlen ($value) < 5) {
                return true;                
            }
        }
             
        function notNumeric($value){
            if (!is_numeric($value)) {
                return true;
            }
        }

        function ValidMail($email) {    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
             }

            }

        function llargadaCinc($value){
            if (strlen($value) > 5){
                return true;

            }
        }

        function llargadaTres($value){
                if (strlen($value) > 3){
                    return true;
    
                }

        }
                        
        function provincias($value){
            $provincias = ["albacete", "alicante", "alacant", "almería", "araba", "álava", "asturias", "ávila",
            "badajoz", "illes balears", "islas baleares", "barcelona", "bizkaia", "burgos","cáceres","cádiz",
            "cantábria", "castellón", "castelló", "ciudad real", "córdoba", "a coruña", "cuenca", "gipuzkoa",
            "girona", "granada", "guadalajara", "huelva", "huesca", "jaén", "león", "lleida", "lugo", "madrid",
            "málaga", "murcia", "navarra", "ourense", "palencia", "las palmas","pontevedra", "la rioja", "salamanca",
            "santa cruz de tenerife", "segovia", "sevilla", "soria", "tarragona", "teruel", "toledo", "valencia",
            "valència", "valladolid", "zamora", "zaragoza", "ceuta", "melilla"];
        
            $value_lowcase = strtolower($value);
            if (!in_array($value_lowcase, $provincias)){
                return true;
            }           
           
        };

        function maxChar($value){
            if ((strlen($value) < 4 ) or (strlen($value) >256 )){
                return true;
            }
        }          

        function idioma($value){
            if ($value == "ESCULL"){
                return true;
            }
                
            }
              
        

?>