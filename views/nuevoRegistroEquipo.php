<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro de Equipo</title>
    <link rel="icon" href="../assets/img/ICon-Upper.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../sidebar.php'; ?>

    <div class="NewCon">
        <h2>Nuevo Registro creado exitosamente</h2>
        <div class="btn-con">
            <button class="btn-agregar" onclick="window.location.href='../ingresarEquipo.php'">Agregar otro Equipo</button>
            <button class="btn-ver" onclick="window.location.href='../listaEquipos.php'">Ver lista de Equipos</button>
        </div>
    </div>
</body>
</html>
