<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a7170709a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="dive">
        <h1>Captura de datos personales</h1>
        <p>INGRESA LOS DATOS QUE SE TE PIDEN</p>
        <hr>
        <form action="resultados.php" method="POST">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre" required><hr>

            <label>Edad</label>
            <input type="number" name="edad" required><hr>

            <label>Ciudad</label>
            <input type="text" name="ciudad" required><hr>

            <label>Fecha de nacimiento</label>
            <input type="date" name="nacimiento" required><hr>

            <label>Pasatiempo favorito</label>
            <input type="text" name="pasatiempo" required><hr>

            <input type="submit" value="Ingresamos datos!">
        </form>
    </div>
</body>
</html>
