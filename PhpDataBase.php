<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pinocho 2ºBC</title>
        <link rel = "icon" href="Recursos/logo.png">
        <link rel = "stylesheet" href = "css/estilos.css">
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5; index.html" />
        <meta name="description" content="La mejor pagina sobre Pinocho">
        <meta name="author" content="Lucas, Leandro, Maximiliano, Paulo">
        <meta name="viewport" content="width=device-width" initial-scale=1.0>
    </head>
    <body>
        <div id="grax">
            <span><span style="color:#36A3FF">Muchas Gracias por tu</span><span style="color:#FF6161"> Opinión</span><span style="color:#36A3FF">!</span></span>
        </div>
        <?php
            $servername = "localhost";
            $username = "u659594651_Test1";
            $password = "Pinocho123";
            $database = "u659594651_Opiniones";
        
            $opinion = $_POST['opinion'];
            $nombre = $_POST['nombre'];
            
            echo "$nombre";
            
            if ($nombre == "") {
                $nombre = "Anonimo";
            }
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);
            
            $sql = "INSERT INTO Test (nombre,opinion) VALUES ('$nombre','$opinion')";
            
            $conn->query($sql);
            
            $conn->close();
        ?>
    </body>
</html>



