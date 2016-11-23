<?php

INCLUDE ("conexion.PHP");


$autor= $_POST["autor"];


$query="INSERT INTO `autor`( `autor`) VALUES ('$autor')";
$resultado= $conexion->query($query);

if($resultado){
	header("location: usuario_libro.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}

?>