<!DOCTYPE html>
<html>
	<head>
        <a href="../asignaturas.php"></a>
            <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
		<title>Formulario De Asignatura</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
            <form method="POST"  action="asignaturas.php" > <!--ojo el POST va con mayuscula-->
 
	Id Asignatura<input type="text" name="idAsignatura" ><br><br>
	Nombre<input type="text" name="nombreasig" ><br><br>
	Numero de Horas<input type="text" name="numhoras" ><br><br>
        Id Especialidad<input type="text" name="especialidad" ><br><br>
        Id Curso<input type="text" name="idCurso" ><br><br>
	
	<input type="submit" value="enviar" name="boton">
</form>
 
	</body>
</html>
<?php
if(isset($_POST['boton']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("asignaturas.php");
} //incluye esas paginas es como un action mas o menos 
?>