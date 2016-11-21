<?php

INCLUDE ("conexion.PHP");

$libro= $_GET["libro"];
$autor= $_GET["autor"];
$foto= $_GET["foto"];
$fecha= $_GET["fecha"];
$link= $_GET["link"];
$id_categoria= $_GET["id_categoria"];
$id_idioma= $_GET["id_idioma"];

$query="INSERT INTO `autor`( `autor`) VALUES ('$autor')";
$resultado= $conexion->query($query);

 
$query="INSERT INTO `libro`( `libro`,`foto`, `fecha`, `link`,`id_idioma`,`id_categoria`) VALUES ('$libro','$foto','$fecha','$link','$id_idioma','$id_categoria')";
$resultado= $conexion->query($query);

print_r($resultado);


if($resultado){
	header("location: usuario_autor.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}

?>

