<?php

INCLUDE ("conexion.PHP");

$libro= $_POST["libro"];
$foto= $_POST["foto"];
$fecha= $_POST["fecha"];
$link= $_POST["link"];
$autor= $_POST["autor"];
$categoria= $_POST["categoria"];
$idioma= $_POST["idioma"];
$id_autor= $_POST["id_autor"];
$id_libro= $_POST["id_libro"];

 
$query="INSERT INTO `libro`( `libro`, `foto`, `fecha`, `link`) VALUES ('$libro','$foto','$fecha','$link')";

$resultado= $conexion->query($query);

$query="INSERT INTO `autor_libro`(  `id_autor`, `id_libro`) VALUES ($id_autor,$id_libro)";

$resultado= $conexion->query($query);

$query="INSERT INTO `autor`( `autor`) VALUES ('$autor')";


$resultado= $conexion->query($query);
$query="INSERT INTO `categoria`(  `categoria`) VALUES ('$categoria')";

$resultado= $conexion->query($query);

$query="INSERT INTO `idioma`(  `idioma`) VALUES ('$idioma')";

$resultado= $conexion->query($query);



if($resultado){
	header("location: tabla.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}

?>

