
<html>
	 <head> 
		<title> MODIFICAR LIBRO  </title>
	 </head>
<body>
	<center>
	< <?php
		 $id_libro=$_GET['id_libro'];
				include("conexion.php");
				
$query="SELECT libro.id_libro,libro,idioma,categoria,fecha,foto,autor,link,autor.id_autor,libro.id_libro from libro,categoria,idioma,autor_libro,autor
WHERE libro.id_libro=autor_libro.id_libro
and autor_libro.id_autor=autor.id_autor
and libro.id_categoria=categoria.id_categoria
and libro.id_idioma=idioma.id_idioma and libro.id_libro = $id_libro";

				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
 	
			?>
		<form action="modificar_proceso.php?id_libro=<?php echo $row['id_libro']; ?>" method="POST">
		
			 <br/> <br/> <br/>
			
            <input type = "text"  required="" name="id_libro" placeholder = "libro" value="<?php echo $row['id_libro']; ?>" /> <br/><br/>
		    <input type = "text"  required="" name="libro" placeholder = "libro" value="<?php echo $row['libro']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="foto" placeholder = "foto" value="<?php echo $row['foto']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="fecha" placeholder = "fecha" value="<?php echo $row['fecha']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="link" placeholder = "link" value="<?php echo $row['link']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="autor" placeholder = "autor" value="<?php echo $row['autor']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="id_libro" placeholder = "id_libro" value="<?php echo $row['id_libro']; ?>" /> <br/><br/>
		    <input type = "text"  required="" name="id_autor" placeholder = "id_autor" value="<?php echo $row['id_autor']; ?>" /> <br/><br/>
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
			<br/><br/>
			<input type = "submit" value = "aceptar"/>
		
		</form>
	</center>
</body>
</html>


