<?php
INCLUDE ("conexion.PHP");

$comentario= $_GET["comentario"];
$nombre_quien_comenta= $_GET["nombre_quien_comenta"];
$id_libro= $_GET["id_libro"];

$query="INSERT INTO `comentario` ( `comentario`, `nombre_quien_comenta`, `id_libro`) VALUES ( '$comentario', '$nombre_quien_comenta', $id_libro)";
$resultado= $conexion->query($query);

if($resultado){
	header("location: tabla.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}       

?>