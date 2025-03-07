<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Datos</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Estilo del formulario */
        #formulario {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Estilos para mensajes de éxito y error */
        .success {
            color: green;
            font-weight: bold;
            text-align: center;
        }

        .error {
            color: red;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

    <div>
        <h1>Ingresa los datos</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required><br>

            <label for="interaccion">Interacción</label>
            <input type="text" id="interaccion" name="interaccion" required><br>

            <input type="submit" value="Agregar registro">
        </form>

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
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"]; 
            $interaccion = $_POST["interaccion"];
            
            $sql = "INSERT INTO salas (nombre, apellido, interaccion) VALUES ('$nombre', '$apellido', '$interaccion')";
            
            if ($conexion->query($sql) == TRUE) {
                echo "<p class='success'>Nuevo jugador agregado con éxito.</p>";
            } else {
                echo "<p class='error'>Error al agregar al Jugador: " . $conexion->error . "</p>";
            }
        }
        ?>
        <?php

$username = "root";
$pasword = "";
$servername = "localhost";
$database = "gabriel";         

$conexion = new mysqli($servername, $username, $pasword,  $database);
if($conexion->connect_error){
  die("Conexion Fallida: " .$conexion->connect_error);
}
$sql = "SELECT * FROM salas";
$resultado = $conexion->query($sql);
$conexion->query($sql);
if ($resultado->num_rows > 0) {
    echo "<table>";

    while ($row = $resultado->fetch_assoc()) {
  
    }
    echo "</table>";
} else {
    echo "No se encontraron registros en la base de datos";
}
$conexion->close();


?>

<div class="container">


<?php if($resultado->num_rows >0):?>
 <style>

  h1{

    text-align:center;
    color:#000000;
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
    background-color: #DEE5E5 ;
    color: black ;  
  }
  tr:nth-child(odd){
    background-color:white;
    color:black;
  }
  th{
    background-color:#124E78;
    color:white;
  }
  

 </style>
<style>
    input[type="submit"]{}
    input[type="submit"]:hover{}
</style>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Numero de control</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
            <th>Colonia</th>
            <th>Especialidad</th>
            <th>Genero</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Fecha de Ingreso</th>
        </tr>
    </thead>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $username = "root";
    $password = "";
    $servername ="localhost";
    $database = "jose";
    $conexion = new mysqli ($servername, $username, $password, $database);
    if($conexion->connect_error){
        die("la conexion fallo: " . $conexion->connect_error);
    }
    //LAS QUE TIENEN LA LETRA "a" PERTENECEN A LA TABLA PRINCIPAL LLAMADA "alumnos"
    //LAS DEMAS LETRAS SON DE ESAS TABLAS, COMO "e" de edades, la de "c" de colonias
    $sql = "SELECT
    a.numero_control,
    a.nombres,
    a.apellido_paterno,
    a.apellido_materno,
    e.edad,
    c.nombre_colonia,
    es.nombre_especialidad,
    g.nombre_genero,
    a.correo,
    a.telefono,
    a.fecha_ingreso
    FROM alumnos a
    JOIN edades e ON a.id_edad = e.id
    JOIN colonias c ON a.id_colonia = c.id
    JOIN especialidades es ON a.id_especialidades = es.id
    JOIN generos g ON a.id_genero = g.id";
    $resultado = $conexion->query($sql);
    if ($resultado->num_row >0){
        while ($row = $resultado->fetch_assoc()){
            echo "<tr>
        <td>{$row['numero_control']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['apellido_paterno']}</td>
        <td>{$row['apellido_materno']}</td>
        <td>{$row['edad']}</td>
        <td>{$row['nombre_colonias']}</td>
        <td>{$row['nombre_especialidad']}</td>
        <td>{$row['nombre_genero']}</td>
        <td>{$row['correo']}</td>
        <td>{$row['telefono']}</td>
        <td>{$row['fecha_ingreso']}</td>
        </tr>";}
    } else{
        echo "No se encontro registro en la bs";
    }
    $conexion->close();
    ?>
    
    <?php while ($fila = $resultado->fetch_assoc()): ?>
      <tr>
        <td><?php echo $fila["id"]; ?></td>}
        <td><?php echo $fila["nombre"]; ?></td>
        <td><?php echo $fila["apellido"]; ?></td>}
        <td><?php echo $fila["interaccion"]; ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
  <?php else: ?>
    <p>No se encontraron personajes</p>
    <?php endif; ?>
    </div>

</body>
</html>
