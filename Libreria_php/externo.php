<?php

    function perimetro($base, $altura){
        echo "<br> El perimetro del rectangulo es: ".($base*2 + $altura*2);
    }

    function area($base, $altura){
        echo "<br> <br> El area del rectangulo es: ".($base*$altura);
    }

    function dibujar($base, $altura){
        echo "<br> <br>";
        for ($i=0; $i < $altura; $i++) { 
            for ($j=0; $j < $base; $j++) { 
                echo "* ";
            }
            echo "<br>";
        }
    }

?>