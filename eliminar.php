<?php

include ("conexion.php");

$libro=$_REQUEST['libro'];
 
$query=" DELETE FROM libro WHERE libro='$libro' ";

$resultado= $conexion->query($query);



$query=" DELETE FROM autor_libro WHERE id_autor='$id_autor' AND id_libro='id_libro' ";


$resultado= $conexion->query($query);

$query="DELETE FROM autor WHERE autor='$autor' ";


$resultado= $conexion->query($query);
$query="DELETE FROM categoria WHERE categoria='$categoria' ";
$resultado= $conexion->query($query);

$query="DELETE FROM idioma WHERE idioma='$idioma' ";

$resultado= $conexion->query($query);



if($resultado){
	header("location: tabla.php");
}
else{
	echo 'NO HAS PODIDO ENTRAR A LA TABLA';
}


?>