
<html>
	 <head> 
		<title> buscar libro  </title>
	 </head>
<body>
	<center>
		<table bgcolor="#B0C4DE" border="4">
			<thead>
			<tr>
				<th colspan="4"> <a href="usuario.php"> nuevo </a> </th>
				<th colspan="9"> biblioteca </th>
			</tr>
				
			</thead>
			<tbody>
				<tr>
					<td> LIBRO</td>
					<td> FOTO</td>
					<td> FECHA</td>
					<td> LINK</td>
					<td> AUTOR</td>
					<td> CATEGORIA</td>
					<td> IDIOMA</td>

					<td colspan="8"> insecion de libro</td>
				</tr>
			<?php
				include("conexion.php");

				$query="SELECT libro,idioma,categoria,fecha,foto,autor,link from libro,categoria,idioma,autor_libro,autor
WHERE libro.id_libro=autor_libro.id_libro
and autor_libro.id_autor=autor.id_autor
and libro.id_categoria=categoria.id_categoria
and libro.id_idioma=idioma.id_idioma";

				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){

				
			?>
			<tr>
				 <td><?php echo $row['libro']; ?></td>
				<td><?php echo $row['foto']; ?></td>
				<td><?php echo $row['fecha']; ?></td>
				<td><?php echo $row['link']; ?></td>
				<td><?php echo $row['autor']; ?></td>
				<td><?php echo $row['categoria']; ?></td>
				<td><?php echo $row['idioma']; ?></td>
			
                <td><a href="modificar.php?libro= <?php echo $row['libro']; ?>">Modificar</a></td>
				<td><a href="encriptacion.html?" >ADMINISTRADOR </a></td>
			</tr>
			<?php
                   }

			?>

			</tbody>

		</table>
	</center>
</body>
</html>

          
          