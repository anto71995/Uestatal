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


$idAsignatura= $_POST['idAsignatura'];
$nombreasig= $_POST['nombreasig'];
$numhoras= $_POST['numhoras'];
$idEspecialidadd= $_POST['idEspecialidad'];
$idCurso=$_POST['idCurso'];



$sql = "INSERT INTO asignaturas (IdAsignatura, NombresAs, NumHoras, IdEspecialidad, IdCurso) VALUES ('$idAsignatura', '$nombreasig', '$numhoras','$idEspecialidadd','$idCurso')";
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
