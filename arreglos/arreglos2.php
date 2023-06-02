<?php

//declararlo al arreglo (con valores)
$paises = ["Argentina", "Bolivia", "Brasil", "Uruguay", "Chile"];

$paises[]= "Paraguay";// se guarda en una nueva posicion

//Ejercicio
// 1- imprimir los paises del arreglo en la lista desplegable
// 2- Uruguay quede seleccionada 
//opcion 1 
echo "<select>";
echo "<option>   $paises[0]  </option>";
echo "<option>   $paises[1]   </option>";
echo "<option >   $paises[2]   </option>";
echo "<option selected>   $paises[3]  </option>";
echo "</select>";
echo "<hr>";

//opcion2
echo "<select>";
for ($i=0 ; $i<6 ; $i++){

    if($paises[$i]=="Uruguay"){
        echo "<option selected>   $paises[$i]  </option>";
    }
    else{
        echo "<option>   $paises[$i]  </option>";
    }

    
}
echo "</select>";

echo "<hr>";
//opcion 3 
echo "<select>";
foreach($paises as $p){
    echo "<option>   $p  </option>";
}
echo "</select>";