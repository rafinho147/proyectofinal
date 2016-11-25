<html>
	 <head> 
		<title> COMENTAR LIBRO</title>
	 </head>
<body>
	<center>
		<form action="guardar_comentario.php" method="GET">
			 <br/> <br/> <br/>
			<div>INGRESE EL COMENTARIO SOBRE EL LIBRO </div>         
<br/>
                <input type = "text"  required="" name="comentario" placeholder = "comentario" value "" /> <br/><br/>
                <input type = "text"  required="" name="nombre_quien_comenta" placeholder = "nombre_quien_comenta" value "" /> <br/><br/>

<div>seleccione libro relacionado </div> <br/>
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
