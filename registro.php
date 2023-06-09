<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pinocho 2ºBC</title>
        <link rel = "icon" href="Recursos/logo.png">
        <!--<link rel = "stylesheet" href = "css/estilos.css">-->
        <meta charset="utf-8">
        <meta name="description" content="La mejor pagina sobre Pinocho">
        <meta name="author" content="Lucas, Leandro, Maximiliano, Paulo">
        <meta name="viewport" content="width=device-width" initial-scale=1.0>
    </head>
    <body>
        <div>
            <h1 style="text-align: center;">Registro publico de comentarios publicados en Pinocho2BC</h1>
        </div>
        <?php
            $servername = "localhost";
            $username = "u659594651_Test1";
            $password = "Pinocho123";
            $database = "u659594651_Opiniones";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);
            
            $sql = "SELECT * FROM Test ORDER BY id DESC";
            
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<br> id: ". $row["id"]. "<br>" ."Name: ". $row["Nombre"]. "<br>" . "Opinion: " . $row["Opinion"] . "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </body>
</html>