
<html>
	 <head> 
		<title> buscar libro  </title>
	 </head>
<body>
	<center>
		<table bgcolor="#B0C4DE" border="8">
			<thead>
			<tr>
				<th colspan="4"> <a href="usuario.php"> NUEVO LIBRO </a> </th>
				<th colspan="9"> BIBLIOTECA</th>
			</tr>
				
			</thead>
			<tbody>
				<tr>
				    <td> ID</td>
					<td> LIBRO</td>
					<td> FOTO</td>
					<td> FECHA</td>
					<td> LINK</td>
					<td> AUTOR</td>
					<td> CATEGORIA</td>
					<td> IDIOMA</td>

					<td colspan="2"> AJUSTED DE LIBRO</td>
				</tr>
			<?php
				include("conexion.php");

				$query="SELECT  libro.id_libro, libro,foto, link, libro.id_categoria, libro.id_idioma, autor.autor, libro.fecha, categoria, idioma from libro, autor_libro, categoria,idioma, autor WHERE
libro.id_libro=autor_libro.id_libro
and autor_libro.id_autor=autor.id_autor
AND categoria.id_categoria=libro.id_categoria
and idioma.id_idioma=libro.id_idioma
GROUP BY libro.id_libro";

				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){

				
			?>
			<tr>
			    <td><?php echo $row['id_libro']; ?></td>
				<td><?php echo $row['libro']; ?></td>
				<td><?php echo "<img src=$row[foto]></img>" ;?></td> 
				<td><?php echo $row['fecha']; ?></td>
				<td><?php echo "<a href=index.php?frase=>$row[link]</a>"; ?></td>   
				<td><?php echo $row['autor']; ?></td>
				<td><?php echo $row['categoria']; ?></td>
				<td><?php echo $row['idioma']; ?></td>
			
                <td><a href="modificar.php?id_libro=<?php echo $row['id_libro']; ?>">Modificar</a></td>
				<td><a href="eliminar.php?id_libro=<?php echo $row['id_libro']; ?>">Eliminar </a></td>
			
			</tr>
			<?php
                   }

			?>

			</tbody>

		</table>
	</center>
</body>
</html>

				
			
			

				
			