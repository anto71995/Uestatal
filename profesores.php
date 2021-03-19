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


$idProfesor= $_POST['idProfesor'];
$nombreprof= $_POST['nombreprof'];
$apeprof= $_POST['apeprof'];
$fecha= $_POST['fecha'];
$Tacademico=$_POST['Tacademico'];
$edad= $_POST['edad'];


$sql = "INSERT INTO profesores (IdProfesor, NombresProf, ApellidosProf, FechaNacimiento, TituloAcademico, Edad) VALUES ('$idProfesor', '$nombreprof', '$apeprof','$fecha','$Tacademico','$edad')";
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
