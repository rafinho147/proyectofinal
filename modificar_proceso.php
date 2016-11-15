<?php

include ("conexion.php");

$libro= $_POST["libro"];
$foto= $_POST["foto"];
$fecha= $_POST["fecha"];
$link= $_POST["link"];
$autor= $_POST["autor"];
$categoria= $_POST["categoria"];
$idioma= $_POST["idioma"];
$id_autor= $_POST["id_autor"];
$id_libro= $_POST["id_libro"];

 
$query="UPDATE libro SET  libro='$libro', foto='$foto', fecha='$fecha', link='$link' WHERE libro='$libro' ";

$resultado= $conexion->query($query);

$query="UPDATE autor_libro SET  id_autor='$id_autor', id_libro='$id_libro' WHERE id_libro='$id_libro'";

$resultado= $conexion->query($query);

$query="UPDATE autor SET  autor='$autor' WHERE autor='$autor'";


$resultado= $conexion->query($query);


$query="UPDATE categoria SET  categoria='$categoria' WHERE categoria='$categoria'";
$resultado= $conexion->query($query);




$query="UPDATE idioma SET  idioma='$idioma' WHERE idioma='$idioma'";

$resultado= $conexion->query($query);







if($resultado){
	header("location: tabla.php");
}
else{
	echo 'NO ENTRO A LA TABLA';
}


?>