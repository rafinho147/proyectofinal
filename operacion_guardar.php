<?php

INCLUDE ("conexion.PHP");

$libro= $_POST["libro"];
$foto= $_POST["foto"];
$fecha= $_POST["fecha"];
$link= $_POST["link"];
$id_categoria= $_POST["id_categoria"];
$id_idioma= $_POST["id_idioma"];


$query="INSERT INTO `libro`( `libro`,`foto`, `fecha`, `link`,`id_idioma`,`id_categoria`) VALUES ('$libro','$foto','$fecha','$link','$id_idioma','$id_categoria')";
$resultado= $conexion->query($query);






if($resultado){
	header("location: usuario_libro.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}

?>

