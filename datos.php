<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");

//echo "[{lenguaje:'java',nivel:'alto'},{lenguaje:'php',nivel:'medio'},{lenguaje:'jquery',nivel:'alto'},{lenguaje:'sql',nivel:'medio'},{lenguaje:'c',nivel:'alto'}]";
//$vector["nombre"]="pepe";
//
$lenguaje[0]=array("lenguaje"=>"java","nivel"=>"alto");
$lenguaje[1]=array("lenguaje"=>"php","nivel"=>"medio");
$lenguaje[2]=array("lenguaje"=>"jquery","nivel"=>"alto");

echo json_encode($lenguaje);

?>