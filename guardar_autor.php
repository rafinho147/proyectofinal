<?php

INCLUDE ("conexion.PHP");

$id_autor= $_GET["id_autor"];
$id_libro= $_GET["id_libro"];


$query="INSERT INTO `autor_libro`(  `id_autor`, `id_libro`) VALUES ($id_autor,$id_libro)";

$resultado= $conexion->query($query);



if($resultado){
	header("location: tabla.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}

?>