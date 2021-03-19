<!DOCTYPE html>
<html>
	<head>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
            <form method="POST"  action="profesores.php" > <!--ojo el POST va con mayuscula-->
 
	Id Profesor<input type="text" name="idProfesor" ><br><br>
	Nombre<input type="text" name="nombreprof" ><br><br>
	Apellido<input type="text" name="apeprof" ><br><br>
        Fecha de Nacimiento<input type="text" name="fecha" ><br><br>
        Titulo Académico<input type="text" name="Tacademico" ><br><br>
	Edad<input type="text" name="edad" ><br><br>
	<input type="submit" value="enviar" name="boton">
        <input type="submit" value="consultar" name="boton1">
</form>
 
	</body>
</html>
<?php
if(isset($_POST['boton']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("profesores.php");
	
 
}
if(isset($_POST['boton1']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("consultaprof.php");
	
 
}//incluye esas paginas es como un action mas o menos 
?>
            
	</body>
</html>