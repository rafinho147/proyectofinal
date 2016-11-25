<html>
	 <head> 
		<title> Guardar libro</title>
	 </head>
<body>
	<center>
		<form action="guardar_libro.php" method="POST">
			 <br/> <br/> <br/>
			<div>SELECCIONE EL AUTOR DEL LIBRO QUE DESEA INSERTAR</div>

<br/>
<div> EN DADO CASO DE QUE NO ENCUENTRE EL AUTOR </div>
<br/>
<br/>

	<a href="usuario_autor.php?">INSERTE AUTOR </a>
	<br/>


			<div> SELECCIONE AUTOR RELACIONADO</div>
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
