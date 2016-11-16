
<html>
	 <head> 
		<title> Guardar libro</title>
	 </head>
<body>
	<center>
		<form action="operacion_guardar.php" method="POST">
			 <br/> <br/> <br/>
			<input type = "text"  required="" name="libro" placeholder = "libro" value "" /> <br/><br/>
			<input type = "text"  required="" name="foto" placeholder = "foto" value "" /> <br/><br/>
			<input type = "text"  required="" name="fecha" placeholder = "fecha" value "" /> <br/><br/>
			<input type = "text"  required="" name="link" placeholder = "link" value "" /> <br/><br/>
			<input type = "text"  required="" name="autor" placeholder = "autor" value "" /> <br/><br/>
			<input type = "text"  required="" name="categoria" placeholder = "categoria" value "" /> <br/><br/>
			<input type = "text"  required="" name="idioma" placeholder = "idioma" value "" /> <br/><br/>
			<input type = "text"  required="" name="id_autor" placeholder = "id_autor" value "" /> <br/><br/>
			<input type = "text"  required="" name="id_libro" placeholder = "id_libro" value "" /> <br/><br/>
			idioma: <br>   
<select multiple name="idioma">    
<option name="español" value="español">español</option>    
<option name="ingles" value="ingles">ingles</option>    
<option name="frances" value="frances">frances</option>    
<option name="italiano" value="italiano">italiano</option>    
<option name="hebre0" value="hebreo">hebreo</option>     
</select>
<br>
			<br/>
			<h1><input type = "submit" value =  "aceptar"/></h1>
		</form>
	</center>
</body>
</html>
