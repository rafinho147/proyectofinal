
<html>
	 <head> 
		<title> Guardar libro</title>
	 </head>
<body>
	<center>
		<form action="operacion_guardar.php" method="POST">
			 <br/> <br/> <br/>
		
			<div> EL MUNDO DE LIBRO DEL LIBRO GRATIS .COM</div>
		
			
<div>seleccione una categoria</div>
<select name="id_categoria">
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
<br/>
<br/>

            <input type = "text"  required="" name="libro" placeholder = "libro" value "" /> <br/><br/>
            <input type = "text"  required="" name="foto" placeholder = "foto" value "" /> <br/><br/>
			<input type = "text"  required="" name="fecha" placeholder = "fecha" value "" /> <br/><br/>
			<input type = "text"  required="" name="link" placeholder = "link" value "" /> <br/><br/>
			<br/>
			<h1><input type = "submit" value =  "aceptar"/></h1>
		</form>
	</center>
</body>
</html>
