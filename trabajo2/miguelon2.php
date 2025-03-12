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
        <link href="https://fonts.cdnfonts.com/css/katakana-tfb" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Index</title>
</head>
<body>
  
    <div class="Contenedor-del-contenedor" style="height: 95vh; width: 100%;">

        <div class="contener" style="font-family: 'katakana tfb', sans-serif; background-color: #444554;">
          <a class="navbar-brand" href="/trabajo2/miguelonorigen.html" style="color: #eef0f2; font-size: 21px;">Inicio</a>
          <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
        
          <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
           <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav" style="font-family: 'katakana tfb', sans-serif; background-color: none; font-size: 18px;">
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
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2; font-family: 'katakana tfb', sans-serif;">
                        Unidad 2
                    </a>
                    <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="dropdown-item" href="/Arturo.html">Practica 4</a><br>
                        <a href="dropdown-item" href="/Arturo1.html">Practica 5</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 6</a><br>
                     </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2; font-family: 'katakana tfb', sans-serif;">
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
            <h1 class="display-4" style="color: #000000; font-weight: 700; font-family: 'Noto Sans Devanagari', sans-serif;">Nombres alazar</h1>
        </div>
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
    echo "<tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Interaccion</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</
        td><td>" . $row["interaccion"] . "</td>";
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
    color:#DEE5E5;
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




</body>
</html>