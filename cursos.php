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
 
$idCurso= $_POST['idCurso'];
$idEspecialidad= $_POST['idEspecialidad'];
$nombrecurso= $_POST['nombrecurso'];
$paralelo= $_POST['paralelo'];



$sql = "INSERT INTO cursos (IdCurso, IdEspecialidad, NombreCurso, Paralelo) VALUES ('$idCurso', '$idEspecialidad', '$nombrecurso','$paralelo')";
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>
<script type="text/javascript">
	alert("Curso Ingresado Exitosamante!!");
	window.location.href='academico.php';
</script>