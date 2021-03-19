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
 
$idAsignaturaa= $_POST['idAsignaturaa'];
$idProfesorr= $_POST['idProfesorr'];



$sql = "INSERT INTO asignaturas_profesor (IdAsignatura, IdProfesor) VALUES ('$idAsignaturaa', '$idProfesorr')";
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

