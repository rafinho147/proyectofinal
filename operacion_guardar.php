<?php

INCLUDE ("conexion.PHP");

$libro= $_GET["libro"];
$foto= $_GET["foto"];
$fecha= $_GET["fecha"];
$link= $_GET["link"];
$autor= $_GET["autor"];
$categoria= $_GET["categoria"];
$idioma= $_POST["idioma"];
$id_categoria= $_GET["id_categoria"];
$id_idioma= $_GET["id_idioma"];
$id_autor= $_GET["id_autor"];
$id_libro= $_GET["id_libro"];





$query="INSERT INTO `autor`( `autor`) VALUES ('$autor')";


$resultado= $conexion->query($query);


$query="INSERT INTO `categoria`(  `categoria`) VALUES ('$categoria')";

$resultado= $conexion->query($query);


$query="INSERT INTO `idioma`(  `idioma`) VALUES ('$idioma')";

$resultado= $conexion->query($query);




 
$query="INSERT INTO `libro`( `libro`, `foto`, `fecha`, `link`,`id_idioma`,`id_categoria`) VALUES ('$libro','$foto','$fecha','$link','$id_idioma','$id_categoria')";

$resultado= $conexion->query($query);


$query="INSERT INTO `autor_libro`(  `id_autor`, `id_libro`) VALUES ($id_autor,$id_libro)";

$resultado= $conexion->query($query);

print_r($resultado);


if($resultado){
	header("location: tabla.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}

?>

