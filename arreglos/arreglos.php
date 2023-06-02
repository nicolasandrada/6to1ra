<?php 
// ARREGLOS
// Guarda varios datos en una misma variable 

// Declaracion de arreglo
// $variable = [];
$nombres = [];

//nuevo elemento al arreglo
$nombres[] = "Melany";
$nombres[] = "Leandro";
$nombres[] = "Dario";
$nombres[] = "Milagros";

//modificar un valor del arreglo
// indice ---> lo que esta entre []
$nombres[2] = "Kronos";  // estoy modificando a "Dario"

echo "Hola mi nombre es $nombres[3]";
echo "<hr>";

//recorrer un arreglo
for ($i=0 ; $i<4 ; $i++){
    echo "Hola mi nombre es $nombres[$i]";
    if($nombres[$i]=="Milagros"){
        echo " Y estoy aprobad@ en programacion<br>";
    }
    else{
        echo "<br>";
    }
}


