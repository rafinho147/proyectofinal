
<html>
	 <head> 
		<title> Guardar libro</title>
	 </head>
<body>
	<center>
		<form action="operacion_guardar.php" method="GET">
			 <br/> <br/> <br/>
			<input type = "text"  required="" name="libro" placeholder = "libro" value "" /> <br/><br/>
			<input type = "text"  required="" name="foto" placeholder = "foto" value "" /> <br/><br/>
			<input type = "text"  required="" name="fecha" placeholder = "fecha" value "" /> <br/><br/>
			<input type = "text"  required="" name="link" placeholder = "link" value "" /> <br/><br/>
			<input type = "text"  required="" name="autor" placeholder = "autor" value "" /> <br/><br/>
			<input type = "text"  required="" name="categoria" placeholder = "categoria" value "" /> <br/><br/>
			<input type = "text"  required="" name="idioma" placeholder = "idioma" value "" /> <br/><br/>
			
<div>seleccione una categoria</div>
<select name="id_Categoria">
<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
$resultados = $conexion->query("select * from categoria");
foreach ($resultados as $fila)
{
    echo "<option value='$fila[id_categoria]'>$fila[categoria]</option>";
}    


}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
</select>

<div>seleccione un idioma</div>
<select name="id_idioma">
<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
$resultados = $conexion->query("select * from idioma");
foreach ($resultados as $fila)
{
    echo "<option value='$fila[id_idioma]'>$fila[idioma]</option>";
}    


}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
</select>

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




			<br/>
			<h1><input type = "submit" value =  "aceptar"/></h1>
		</form>
	</center>
</body>
</html>
