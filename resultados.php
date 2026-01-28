<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a7170709a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="popUpOverlay"></div>
    <div id="popUpBox">
        <i class="fas fa-question-circle fa-5x" style="color: #5dade2;"></i>
        <h2>¿VOLVER A INGRESAR DATOS?</h2>
        <div id="closeModal"></div>
    </div>

    <div class="dive2">
        <h1>RESULTADOS</h1>
        
        <img src="snoopy.jpg" alt="Success" width="120">

        <div class="datos-usuario">
            <?php
            
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $ciudad = $_POST['ciudad'];
            $nacimiento = $_POST['nacimiento'];
            $pasatiempo = $_POST['pasatiempo'];

            echo "<p><b>Nombre:</b> $nombre</p>";
            echo "<p><b>Edad:</b> $edad</p>";
            echo "<p><b>Ciudad:</b> $ciudad</p>";
            echo "<p><b>Lugar de Nacimiento:</b> $nacimiento</p>";
            echo "<p><b>Pasatiempo:</b> $pasatiempo</p>";
            ?>
        </div>

        <h2>¡BIEN HECHO!</h2>
        <button onclick="Alert.render()" class="btn">¡Volver a Ingresar!</button>
    </div>

    <script src="app.js"></script>
</body>
</html>
