<html>
	<head>
            <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
            <form method="POST"  action="formcalificaciones.php" > <!--ojo el POST va con mayuscula-->
 
	Id Registro<input type="text" name="idRegistro" ><br><br>
	Id Alumnoooo<input type="text" name="idAlumnoooo" ><br><br>
        Id Profesorrrr<input type="text" name="idProfesorrrr" ><br><br>
        Id Asignaturaaaa<input type="text" name="idAsignaturaaaa" ><br><br>
        Id Parciallll<input type="text" name="idParciallll" ><br><br>
        Fecha Registro<input type="text" name="fechaRegistro" ><br><br>
        Lecciones<input type="text" name="lecciones" ><br><br>
        Tareas Clase<input type="text" name="tareasClase" ><br><br>
        TareasClase1<input type="text" name="tareasClase1" ><br><br>
        Trabajo Grupal<input type="text" name="trabGrupal" ><br><br>
        Nota Parcial<input type="text" name="notaParcial" ><br><br>
        Año Lectivo<input type="text" name="añoLectivo" ><br><br>
        Observacion<input type="text" name="observacion" ><br><br>
           
        
     
	
	<input type="submit" value="enviar" name="boton">
</form>
 
<?php
if(isset($_POST['boton']))   //isser = cuando sucede algo , cuando de apreta el name=boton con el metodo post
{
	include("calificaciones.php");
	
 
} //incluye esas paginas es como un action mas o menos 
?>
	</body>
</html>