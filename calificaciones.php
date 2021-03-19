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
 
$idRegistro= $_POST['idRegistro'];
$idAlumnoooo= $_POST['idAlumnoooo'];
$idProfesorrrr= $_POST['idProfesorrrr'];
$idAsignaturaaaa= $_POST['idAsignaturaaaa'];
$idParciallll= $_POST['idParciallll'];
$fechaRegistro= $_POST['fechaRegistro'];
$lecciones= $_POST['lecciones'];
$tareasClase= $_POST['tareasClase'];
$tareasClase1= $_POST['tareasClase1'];
$trabGrupal= $_POST['trabGrupal'];
$notaParcial= $_POST['notaParcial'];
$añoLectivo= $_POST['añoLectivo'];
$observacion= $_POST['observacion'];

$sql = "INSERT INTO registrocalificaciones (IdRegistro, IdAlumno, IdProfesor, IdAsignatura, IdParcial, FechaRegistro, Lecciones, "
        . "TareasClase, TareasEClase, TrabGrupal, NotaParcial, Ano_Lectivo, Observacion) VALUES "
        . "('$idRegistro', '$idAlumnoooo', '$idProfesorrrr','$idAsignaturaaaa','$idParciallll','$fechaRegistro','$lecciones','$tareasClase',"
        . "'$tareasClase1','$trabGrupal','$notaParcial','$añoLectivo','$observacion')";
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>


