<h1>Ingresa los datos</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
            <label for="salas">nombre</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="apellido">apellido</label>
            <input type="text" id="apellido" name="apellido" required><br>

            <label for="interaccion">interaccion</label>
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
                echo "<p class='error'>Error al agregar al Jugador:</p>" . $conexion->error . "<p>";
            }
        }

        ?>
    </div>


</body>
</html>