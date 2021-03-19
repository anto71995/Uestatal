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

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Conexion exitosa";
 
$sql = mysqli_query($conn,"SELECT* FROM alumnos");
while ($consulta = mysqli_fetch_array($sql)){
    echo 
    "
   <table width=\"100%\" borders=\"1\">
       <tr>
       <td><b><center>Id Alumno</center><bd></td>
    <td><b><center>Nombres</center><bd></td>
    <td><b><center>Apellidos</center><bd></td>
    <td><b><center>Fecha de Nacimiento</center><bd></td>
    <td><b><center>Edad</center><bd></td>
    </tr>
    <tr>
    <td>".$consulta['IdAlumno']."</td>
    <td>".$consulta['NombresAl']."</td>
    <td>".$consulta['ApellidosAl']."</td>
    <td>".$consulta['FechaNacimiento']."</td>
    <td>".$consulta['Edad']."</td>
<td> </td>
</tr>
</table>
           ";
}
if (mysqli_query($conn, $sql)) {
      echo "Datos recibidos correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
