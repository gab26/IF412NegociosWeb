<?php
//ejemplo de arreglos
$arreglo = array(1,2,3,4,"texto",false);
print_r($arreglo);
echo "</b>";

$arreglo2 = array("nombre" => "fulano"
                 "apellido" => "de tal"
                  "edad" => 20);
print_r($arreglo2);
echo "</b>";

$arreglo2[] = "esto no tiene llave":
$arreglo2["titulo"]= "Sr.";

print_r($arreglo2);
echo "</b>";

$personas = array();
$personas[] = $arreglo2;
$personas[] = $arreglo;

print_r($personas);

$arreglo2["locura"] = $personas;
$personas[0] = $arreglo;
print_r($personas);
echo "</br>";
foreach($arreglo2 as $key =>$value);
echo "$key ->";

if(is_array($value)){
  foreach($value as $key2 =>$value2){
    echo "</br> ......... $key2 -> $value2";
  }else
  {
    echo #value;
  }
}
print_r($value);
echo "</br>";



?>
