<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link href="https://fonts.cdnfonts.com/css/vazirmatn" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/noto-sans-devanagari" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/unbounded" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Index</title>
</head>
<body>
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
                        <a href="dropdown-item" href="/Arturo.html">Practica 1</a><br>
                        <a href="dropdown-item" href="/Arturo1.html">Practica 2</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 3</a><br>
                     </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 2
                    </a>
                    <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="dropdown-item" href="/trabajo2/hola4.php">Practica 4</a><br>
                        <a href="dropdown-item" href="/Arturo1.html">Practica 5</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 6</a><br>
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
    
        
        <div class="jumbotron" style="text-align: center; background-color: #eef0f2;">
            <h1 class="display-4" style="color: #000000; font-weight: 700; font-family: 'Noto Sans Devanagari', sans-serif;">Volleyball</h1>
        </div>
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "voleyball";

    $conexion = new mysqli($servername, $username, $password, $database);
    if($conexion->connect_error){
        die("Conexion Fallida" . $conexion->connect_error);
    }
    $sql = "SELECT * FROM setters";
    $resultado = $conexion->query($sql);
    ?>

<div class="container">
    <h1>Datos</h1>
<?php if($resultado->num_rows >0):?>
<style>
    h1{
        text-align:center;
        margin-bottom:20px;
    }
    table{
        width: 100px;
        border-collapse:collapse;
        margin-top:50px;
    }
    th, td{
        padding: 10px;
        text-align:left;
        border-bottom: 1px solid;
    }
    table{
        display:block;
        margin-left: auto;
        margin-right: auto;
    }
</style>


</div>

<table>
<tr>
   <th>Identificacion</th>
   <th>Nombre real</th>
   <th>Nombre 2</th>
   <th>Nombre 3</th>
   <th>Nombre 4</th> 
</tr>
<?php while($fila = $resultado->fetch_assoc()): ?>
<tr>
    <td><?php echo $fila ['id']; ?></td>
    <td><?php echo $fila ['Nombre']; ?></td>
    <td><?php echo $fila ['Apellido']; ?></td>
    <td><?php echo $fila ['Numero']; ?></td>
    <td><?php echo $fila ['Posición']; ?></td>
</tr>
<?php endwhile; ?>
</table>
<?php else: ?>
    <p>no se encontro</p>
    <?php endif; ?>
      
</body>
</html>