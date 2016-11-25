<?php

include ("conexion.php");

$id_libro=$_REQUEST['id_libro'];
/*$id_libro=$_POST['id_libro'];*/
$libro= $_POST["libro"];
$foto= $_POST["foto"];
$fecha= $_POST["fecha"];
$link= $_POST["link"];
$autor= $_POST["autor"];
$id_autor= $_POST["id_autor"];
$id_libro= $_POST["id_libro"];
$id_idioma= $_POST["id_idioma"];
$id_categoria= $_POST["id_categoria"];

$query="INSERT INTO `autor_libro`(  `id_autor`, `id_libro`) VALUES ($id_autor,$id_libro)";
$resultado= $conexion->query($query);

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


