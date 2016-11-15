
<html>
	 <head> 
		<title> Guardar album  </title>
	 </head>
<body>
	<center>
	< <?php
		 $libro=$_REQUEST['libro'];
				include("conexion.php");
				

				$query="SELECT libro,idioma,categoria,fecha,foto,autor,link,autor.id_autor,libro.id_libro from libro,categoria,idioma,autor_libro,autor
WHERE libro.id_libro=autor_libro.id_libro
and autor_libro.id_autor=autor.id_autor
and libro.id_categoria=categoria.id_categoria
and libro.id_idioma=idioma.id_idioma";

				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
 	
			?>
		<form action="modificar_proceso.php?libro=<?php echo $row['libro']; ?>" method="POST">
		
			 <br/> <br/> <br/>


		    <input type = "text"  required="" name="libro" placeholder = "libro" value="<?php echo $row['libro']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="foto" placeholder = "foto" value="<?php echo $row['foto']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="fecha" placeholder = "fecha" value="<?php echo $row['fecha']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="link" placeholder = "link" value="<?php echo $row['link']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="autor" placeholder = "autor" value="<?php echo $row['autor']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="categoria" placeholder = "categoria" value="<?php echo $row['categoria']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="idioma" placeholder = "idioma" value="<?php echo $row['idioma']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="id_autor" placeholder = "id_autor" value="<?php echo $row['id_autor']; ?>" /> <br/><br/>
			<input type = "text"  required="" name="id_libro" placeholder = "id_libro" value="<?php echo $row['id_libro']; ?>" /> <br/><br/>
		
			<input type = "submit" value = "aceptar"/>
		
		</form>
	</center>
</body>
</html>


