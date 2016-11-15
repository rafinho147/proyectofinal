<?php

$conexion = new mysqli("localhost","root","","biblioteca");

if($conexion)
{
	echo "CONEXION EXITOSA";
}
else
{
	echo "CONEXION FALLIDA";
}

?>