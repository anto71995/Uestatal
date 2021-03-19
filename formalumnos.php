<!DOCTYPE html>
<html>
	<head>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
        <a href="../insertaralumnos.php"></a>
	</head>
	<body>
            <form method="POST"  action="formalumnos.php" > <!--ojo el POST va con mayuscula-->
 
	Id Alumno<input type="text" name="idAlumno" ><br><br>
	Nombre<input type="text" name="nombre" ><br><br>
	Apellido<input type="text" name="ape" ><br><br>
        Fecha de Nacimiento<input type="text" name="fecha" ><br><br>
	Edad<input type="text" name="edad" ><br><br>
	<input type="submit" value="enviar" name="boton">
        <input type="submit" value="consultar" class="btn btn-info" name="boton1">
        <input type="reset" value="Borrar datos de celda"  name="boton2">

</form>
 
<?php
if(isset($_POST['boton']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("insertaralumnos.php");
	
 
}
if(isset($_POST['boton1']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("consultaAlum.php");
	
 
}//incluye esas paginas es como un action mas o menos 
?>
            
	</body>
</html>
