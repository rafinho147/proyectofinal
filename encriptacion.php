
<?php
session_start();
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
try{
$conexion = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
$resultados = $conexion->query("SELECT usuario, clave FROM usuario where usuario = '$usuario'and clave = md5('$clave') ");    
foreach ($resultados as $fila )    
{

$_SESSION["autenticado"]="SI";
	header("Location: tabla1.php");
}
echo "no entro a la tabla";
}

catch(Exception $e)
{
    echo $e->getMessage();
}

?>

