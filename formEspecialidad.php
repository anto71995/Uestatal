<!DOCTYPE html>
<html>
	<head>
        
            <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
		<title>Formulario De Especialidad</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
            <form method="POST"  action="Especialidad.php" > <!--ojo el POST va con mayuscula-->
 
	Id Especialidad<input type="text" name="idEspecialidad" ><br><br>
	Nombre Especialidad<input type="text" name="nombreesp" ><br><br>
	
	
	<input type="submit" value="enviar" name="boton">
</form>
 
	</body>
</html>
<?php
if(isset($_POST['boton']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("Especialidad.php");
} //incluye esas paginas es como un action mas o menos 
?>