<!DOCTYPE html>
<html>
	<head>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
            <form method="POST"  action="formasigprof.php" > <!--ojo el POST va con mayuscula-->
 
	Id Asignatura<input type="text" name="idAsignaturaa" ><br><br>
	Id Profesor<input type="text" name="idProfesorr" ><br><br>
	
	<input type="submit" value="enviar" name="boton">
</form>
 
<?php
if(isset($_POST['boton']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("asig_profesores.php");
	
 
} //incluye esas paginas es como un action mas o menos 
?>
	</body>
</html>