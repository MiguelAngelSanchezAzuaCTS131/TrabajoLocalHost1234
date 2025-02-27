<?php

$username = "root";
$pasword = "";
$servername = "localhost";
$database = "gabriel";    

$conexion = new mysqli($servername, $username, $pasword, $database);
if($conexion->connect_error){
 die("Conexion Fallida: " .$conexion->connect_error);
}
$sql = "SELECT * FROM salas";
$resultado = $conexion->query($sql);
$conexion->query($sql);
if ($resultado->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Equipo</th><th>Posicion</th><th>Altura</th><th>Peso</th><th>Numero</th><th>Edad</th><th>Nacionalidad</th><th>Puntos</th></tr>";
  while ($row = $resultado->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</
    td><td>" . $row["interaccion con el mundo real"] . "</td>";

  }
  echo "</table>";
} else {
  echo "No se encontraron registros en la base de datos";
}
$conexion->close();


?>

<div class="container">

<h1>Datos de la tabla de personajes</h1>

<?php if($resultado->num_rows >0):?>
 <style>

 h1{

  text-align:center;
  color:#blue;
  margin: bottom: 20px;
 }
 table{
  width : 100% ;
  border-collapse: collapse;
  margin-top: 50px;
  border-radius:50px;
 }
 th, td {
  padding:10px;
  text-align:left;
  border-bottom: 1px solid #ddd;
 }
 tr:nth-child(even){
  background-color: blue ;
  color: black ; 
 }
 tr:nth-child(odd){
  background-color:white;
  color:black;
 }
 th{
  background-color:#ff3eff;
  color:white;
 }
 

 </style>
 <table>
  <tr>
   <th>id</th>
   <th>nombre real</th>
   <th> Nombre del super heroe</th>
   <th>Poderes</th>
   <tr>Debilidades</tr>
  </tr>
  <?php while ($fila = $resultado->fetch_assoc()): ?>
   <tr>
    <td><?php echo $fila["id"]; ?></td>}
    <td><?php echo $fila["nombre"]; ?></td>
    <td><?php echo $fila["apellido"]; ?></td>}
    <td><?php echo $fila["interaccion con el mundo real"]; ?></td>
   </tr>
  <?php endwhile; ?>
 </table>
 <?php else: ?>
  <p>No se encontraron personajes</p>
  <?php endif; ?>




</body>
</html>

