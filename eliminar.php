<?php

include ("conexion.php");

$id_libro=$_GET["id_libro"];



$query=" DELETE FROM autor_libro WHERE id_libro=$id_libro ";
$resultado= $conexion->query($query);


$query=" DELETE FROM libro WHERE id_libro=$id_libro ";

$resultado= $conexion->query($query);





if($resultado){
	header("location: tabla.php");
}
else{
	echo 'NO HAS PODIDO ENTRAR A LA TABLA';
}


?>