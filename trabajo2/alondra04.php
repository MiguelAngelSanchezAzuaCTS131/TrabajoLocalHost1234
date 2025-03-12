<!DOCTYPE html>
<html lang="en">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');
        
        *{
          margin: 0px;
          padding: 0px;
          align-items: center;
          font-family: 'Poppins', sans-serif;;
          justify-content: center;
        }
        .jumbotron{
            margin: 1.5%;
            align-items: center;
        }
        .row{
            display: flex;
            padding-left: 20px;   
        
        }
        .nav-link dropdown-toggle{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .nav-link{
            font-size: 17px;
        }
       
        .navbar-brand{
            font-weight: bold;
            color: black; 
            font-size: 23px;
        }
        .dropdown-item {
            font-size: 15px;
        }
        .dropdown-item:hover {
            background-color: rgb(218, 175, 35);
            font-size: 16px;
        }
        .navbar-brand:hover{
            font-weight: bold;
            color: rgb(255, 255, 255); 
            font-size: 23px;
        }
        h1{
            text-align:center;
            color: pink;
            margin-bottom: 20%;
            align-items: center;
            border-radius: 70%;
        }
        table{
            width:100%;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 90px;
            align-items:center;
        }
        td,th{
            padding: 10%;
            text-align:left;
            border-bottom: 1.5px solid black;
        }
        tr:nth-child(even){
            background-color: #f5e1b5; 
            color: black;
            font-size: 10px;
        }
        tr:nth-child(odd){
            background-color: #fff7e4;
            color: black;
            font-size: 15px;
        }
        th{
            background-color: #F9A03F;
            color: black;
            font-size: 15px;
            text-align: center;
            
        }
       

        
    </style>
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <title>Alondra Vidal</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#F9A03F;" >
        <div class="container">
            <a href="index.html" class="navbar-brand" style="font-size: 23px;"> Inicio </a>
            <!-- boton que lleva a si mismo de color ....-->

            <!--Menu dropdown para poner las ligas practicas-->
            <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: black; "> Para el amor </a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #FFEC8C;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="/alondravid/alondra01.php" style="color: black;">Tulipanes rojos</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra02.php" style="color: black;">Claveles rojos</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra03.php" style="color: black;">Dalias</a><br>
                            </a>
                        </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: black;"> Para la amistad</a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:  #FFEC8C;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="/alondravid/alondra04.php" style="color: black;">Rosas amarillas</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra05.php" style="color: black;">Fresias</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra06.php" style="color: black;">Lirios de los incas</a><br>
                            </a>
                        </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: black;"> Otros... </a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:  #FFEC8C;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="/alondravid/alondra07.php" style="color: black;">Condolencias</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra08.php" style="color: black;">Cumpleaños</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra09.php" style="color: black;">Nacimiento</a><br>
                            </a>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>



        </div>
    </nav>

    
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
    $database = "estudiantes";

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
        <hr class="my-4">
        <p style="text-align: center;"> <strong>Alondra Yamilet Cobos Vidal</strong> </p>
        <p class="lead">
            
        </p> 
    </div>
  
    
 


</body>
</html>

    
