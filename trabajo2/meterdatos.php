<?php 
$username = "root";
$password = "";
$servername = "localhost"; 
$database = "gabriel";
$conexion = new mysqli($servername, $username, $password, $database);


if ($conexion->connect_error) {
    die("La conexion fallo: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //se obtienen los datos del formulario
    $nombre = $_POST["nombre"]; //tal cual aparecen en su base de datos lo que va en comillas
    $apellido = $_POST["apellido"]; //tal cual aparecen en su base de datos lo que va en comillas
    $interaccion = $_POST["interaccion"]; //tal cual aparecen en su base de datos lo que va en comillas

    $sql = "INSERT INTO salas (nombre, apellido, , interaccion) VALUES ($nombre, $apellido, $interaccion,)";
    if ($conexion->query($sql) == TRUE) {
        echo "<p class='success'>Nuevo personaje agregado con exito.</p>";
    } else {
        echo "<p class='error'>Error al agregar al personaje: " . $conexion->error . "</p>";
    }
}
?>

<h1>Ingresa los datos</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
   <label for="Nombre">nombre:</label>
   <input type="text" id="nombre" name="nombre" required><br>
   <label for="Apellido">apellido:</label>
   <input type="text" id="apellido" name="apellido" required><br>
   <label for="interaccion">interaccion:</label>
   <input type="text" id="interaccion" name="interaccion" required><br>
 

   <input type="submit" value="Agregar registro">
  </form>


