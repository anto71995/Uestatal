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


$idEspecialidad= $_POST['idEspecialidad'];
$nombreesp= $_POST['nombreesp'];


$sql = "INSERT INTO especialidades (IdEspecialidad, NombreEsp) VALUES ('$idEspecialidad', '$nombreesp')";
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<script type="text/javascript">
	alert("Especialidad Ingresada Exitosamante!!");
	window.location.href='academico.php';
</script>
