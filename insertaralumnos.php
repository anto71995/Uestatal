<?php
$servername = "localhost";
$database = "ue";
$username = "root";
$password = '';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Conexion exitosa";
 
$idAlumno= $_POST['idAlumno'];
$nombre= $_POST['nombre'];
$ape= $_POST['ape'];
$fecha= $_POST['fecha'];
$edad= $_POST['edad'];


$sql = "INSERT INTO alumnos (IdAlumno, NombresAl, ApellidosAl, FechaNacimiento,Edad) VALUES ('$idAlumno', '$nombre', '$ape','$fecha','$edad')";
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>
<script type="text/javascript">
	alert("Alumno Ingresado Exitosamante!!");
	window.location.href='academico.php';
</script>