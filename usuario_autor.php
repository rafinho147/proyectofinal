<html>
	 <head> 
		<title> Guardar libro</title>
	 </head>
<body>
	<center>
		<form action="guardar_autor.php" method="GET">
			 <br/> <br/> <br/>
			<div>seleccione el actor del libro que desea insertar</div>
			<div>seleccione autor relacionado</div>
<select name="id_autor">
<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
$resultados = $conexion->query("select * from autor");
foreach ($resultados as $fila)
{
    echo "<option value='$fila[id_autor]'>$fila[autor]</option>";
}    

}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
</select>

<div>seleccione libro relacionado </div>
<select name="id_libro">
<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
$resultados = $conexion->query("select * from libro");
foreach ($resultados as $fila)
{
    echo "<option value='$fila[id_libro]'>$fila[libro]</option>";
}    

}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
</select>
			
			

			<h1><input type = "submit" value =  "aceptar"/></h1>
		</form>
	</center>
</body>
</html>
