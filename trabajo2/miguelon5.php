<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link href="https://fonts.cdnfonts.com/css/katakana-tfb" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/avestrage" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <div class="Contenedor-del-contenedor" style="height: 95vh; width: 100%;">

<div class="contener" style="font-family: 'katakana tfb', sans-serif; background-color: #0A100D;">
  <a class="navbar-brand" href="/trabajo2/Index.html" style="color: #eef0f2; font-size: 21px;">Inicio</a>
  <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->

  <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
   <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav" style="font-family: 'katakana tfb', sans-serif; background-color: none; font-size: 18px;">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">Unidad 1</a>
            <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a href="/trabajo2/miguelon1.php">Practica 1</a><br>
                <a href="/trabajo2/miguelon2.php">Practica 2</a><br>
                <a  href="/trabajo2/miguelon3.php">Practica 3</a><br>
             </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2; font-family: 'katakana tfb', sans-serif;">
                Unidad 2
            </a>
            <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a  href="/trabajo2/miguelon4.php">Practica 4</a><br>
                <a  href="/trabajo2/miguelon5.php">Practica 5</a><br>
                <a href="/index.html">Practica 6</a><br>
             </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2; font-family: 'katakana tfb', sans-serif;">
                Unidad 3
            </a>
            <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a  href="/Miguelon7.html">Practica 7</a><br>
                <a  href="/Miguelon8.html">Practica 8</a><br>
                <a  href="/Miguelon9.html">Practica 9</a><br>
                <a  href="/Miguelon10.html">Practica 10</a><br>
             </div>
        </li>
    </ul>
   </div>
</div>


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
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Estilo del formulario */
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

    <div class="jumbotron">
           <div class="container">
        <h1 style="font-family: 'Avestrage', sans-serif;"> Página de mostrar datos relacionados </h1>

<form method="POST" id="formulario">
<label for="numero_control">Numero de Control</label>
<input type="text" name="numero_control" id="numero_control" required><br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" required><br>
<label for="apellido_paterno">Apellido Paterno</label>
<input type="text" name="apellido_paterno" id="apellido_paterno" required><br>
<label for="apellido_materno">Apellido Materno</label>
<input type="text" name="apellido_materno" id="apellido_materno" required><br>
<label for="id_edad">Edad</label>
<input type="text" name="id_edad" id="id_edad" required><br>
<label for="id_colonia">Colonia</label>
<input type="text" name="id_colonia" id="id_colonia" required><br>
<label for="id_especialidad">Especialidad</label>
<input type="text" name="id_especialidad" id="id_especialidad" required><br>
<label for="id_genero">Genero</label>
<input type="text" name="id_genero" id="id_genero" required><br>
<label for="correo">Correo</label>
<input type="text" name="correo" id="correo" required><br>
<label for="telefono">Telefono</label>
<input type="text" name="telefono" id="telefono" required><br>
<label for="fecha_ingreso">Fecha de ingreso</label>
<input type="text" name="fecha_ingreso" id="fecha_ingreso" required><br>
<input type="submit" value="Agregar Registro">
</form>
    <?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "jose";

    $conexion = new mysqli($servername, $username, $password, $database);
    if($conexion->connect_error){
        die("Conexion Fallida: ". $conexion->connect_error);
    }
    function insertarAlumno($conexion)
    {
    if($_SERVER ["REQUEST_METHOD"=="POST"]){
    var_dump($_POST);
    $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
    $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
    $edad = $conexion->real_escape_string($_POST["edad"]);
    $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
    }

   }
    $sql = "SELECT 
             a.numero_control,
             a.nombre,
             a.apellido_paterno,
             a.apellido_materno,
             e.edad,
             c.nombre_colonias,
             es.nombre_especialidad,
             g.nombre_genero,
             a.correo,
             a.telefono,
           a.fecha_ingreso 
    FROM alumnos a
    JOIN edades e ON a.id_edad = e.id
    JOIN colonias c ON a.id_colonia = c.id
    JOIN especialidades es ON a.id_especialidad = es.id
    JOIN generos g ON a.id_genero = g.id";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows >0){
       
        while($row = $resultado->fetch_assoc()){
            echo "<tr>
            <td>{$row['numero_control']} </td>
            <td>{$row['nombre']} </td>
            <td>{$row['apellido_paterno']} </td>
            <td>{$row['apellido_materno']} </td>
            <td>{$row['edad']} </td>
            <td>{$row['nombre_colonias']} </td>
            <td>{$row['nombre_especialidad']} </td>
            <td>{$row['nombre_genero']} </td>
            <td>{$row['correo']} </td>
            <td>{$row['telefono']} </td>
            <td>{$row['fecha_ingreso']} </td>
            
            </tr>";
        }

    //echo "</table>";
    }
    else{
        echo "No se encontraron registros en la base de datos";
    }
    $conexion->close();
     
    ?>
    </table>
        
    </div>   
    </div>
  
    
 


</body>
</html>

    
