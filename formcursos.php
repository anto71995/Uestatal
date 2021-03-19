<!DOCTYPE html>
<html>
	<head>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
            <form method="POST"  action="formcursos.php" > <!--ojo el POST va con mayuscula-->
 
	Id Curso<input type="text" name="idCurso" ><br><br>
	Id Especialidad<input type="text" name="idEspecialidad" ><br><br>
	Nombre Curso<input type="text" name="nombrecurso" ><br><br>
        Paralelo<input type="text" name="paralelo" ><br><br>
	
	<input type="submit" value="enviar" name="boton">
</form>
 
<?php
if(isset($_POST['boton']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("cursos.php");
	
 
} //incluye esas paginas es como un action mas o menos 
?>
	</body>
</html>