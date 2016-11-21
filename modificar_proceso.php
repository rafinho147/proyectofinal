<?php

include ("conexion.php");

$libro= $_GET["libro"];
$foto= $_GET["foto"];
$fecha= $_GET["fecha"];
$link= $_GET["link"];
$autor= $_GET["autor"];
$id_autor= $_GET["id_autor"];
$id_libro= $_GET["id_libro"];
$id_idioma= $_GET["id_idioma"];
$id_categoria= $_GET["id_categoria"];
 
$query="UPDATE autor SET  autor='$autor' WHERE id_autor='$id_autor'";
$resultado= $conexion->query($query);

$query="UPDATE libro SET  libro='$libro', foto='$foto', fecha='$fecha', link='$link', id_idioma='$id_idioma', id_categoria='$id_categoria' WHERE id_libro='$id_libro' ";
$resultado= $conexion->query($query);


if($resultado){
	header("location: tabla.php");
}
else{
	echo 'NO ENTRO A LA TABLA';
}


?>