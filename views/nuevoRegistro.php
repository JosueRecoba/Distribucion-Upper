<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro</title>
    <link rel="icon" href="../assets/img/ICon-Upper.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../sidebar.php'; ?>

    <div class="NewCon">
        <h2>Nuevo Registro creado exitosamente</h2>
        <div class="btn-con">
            <button class="btn-agregar" onclick="window.location.href='ingresarContrato.php'">Agregar otro Contrato</button>
            <button class="btn-ver" onclick="window.location.href='listaContratos.php'">Ver lista de Contratos</button>
        </div>
    </div>
</body>
</html>
