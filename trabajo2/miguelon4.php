<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <div class="Contenedor-del-contenedor" style="height: 95vh; width: 100%;">

<div class="contener" style="font-family: 'Unbounded', sans-serif; background-color: #000000;">
  <a class="navbar-brand" href="" style="color: #eef0f2; font-size: 21px;">Inicio</a>
  <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
  <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
   <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav" style="font-family: 'Vazirmatn', sans-serif; background-color: none; font-size: 18px;">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">Unidad 1</a>
            <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/trabajo2/hola4.php">Mostrar Datos 1</a><br>
                <a class="dropdown-item" href="/trabajo2/hola4.php">Mostrar Datos 2</a><br>
                <a class="dropdown-item" href="/trabajo2/hola4.php">Mostrar Datos 3</a><br>
             </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                Unidad 2
            </a>
            <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/trabajo2/hola4.php">Practica 4</a><br>
                <a class="dropdown-item" href="/trabajo2/alondra04.php">Practica 5</a><br>
                <a class="dropdown-item" href="/index.html">Practica 6</a><br>
             </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                Unidad 3
            </a>
            <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a href="dropdown-item" href="/Arturo.html">Practica 7</a><br>
                <a href="dropdown-item" href="/Arturo1.html">Practica 8</a><br>
                <a href="dropdown-item" href="/index.html">Practica 9</a><br>
                <a href="dropdown-item" href="/index.html">Practica 10</a><br>
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

    <div class="jumbotron">
           <div class="container">
        <h1> Página de mostrar datos relacionados </h1>

        <table class= "table table-bordered">
            <thead>
                <tr>
                   <th>Número de Control</th>
                   <th>Nombre</th>
                   <th>Apellido Paterno</th>
                   <th>Apellido Materno</th>
                   <th>Edad</th>
                   <th>Colonia</th>
                   <th>Especialidad</th>
                   <th>Género</th>
                   <th>Correo</th>
                   <th>Teléfono</th>
                   <th>Fecha de Ingreso</th>
                </tr>
           </thead>
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

    <p>
 
            
        </p> 
    </div>
  
    
 


</body>
</html>

    
