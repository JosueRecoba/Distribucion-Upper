<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrar Datos</title>
    <link rel="icon" href="../assets/img/ICon-Upper.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../sidebar.php'; ?>

    <div class="containerlist">
        <div class="main-contentlist">
            <h1 class="title">Filtrar Datos</h1>
            <div class="filter-section">
                <form id="contratoForm" action="processContrato.php" method="post">
                    <input type="text" name="contrato" placeholder="No Contrato" required>
                </form>
                <form id="tipoEquipoForm" action="processTipoEquipo.php" method="post">
                    <input type="text" name="tipoEquipo" placeholder="Tipo de equipo" required>
                </form>
                <button id="buscar">Buscar</button>
                <button id="limpiar">Limpiar</button>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID_relativo</th>
                            <th>Contrato</th>
                            <th>Tipo de equipo</th>
                            <th>Estado</th>
                            <th>SN</th>
                            <th>ID_unico</th>
                            <th>Descarga individual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nombre del Contrato</td>
                            <td>Tipo de equipo</td>
                            <td>Estado</td>
                            <td>SN</td>
                            <td>123</td>
                            <td><button class="btn-print"><i class="fas fa-print"></i></button></td>
                        </tr>
                        <!-- Más filas aquí -->
                    </tbody>
                </table>
            </div>
            <div class="button-group">
                <button class="btn-gd" onclick="guardarDatos()">Guardar datos</button>
                <button class="btn-generate" onclick="generarEtiquetas()">Generar etiquetas</button>
                <button class="btn-download" onclick="window.location.href='tablaMaster.php'">Ir a master</button>
            </div>
        </div>
    </div>
</body>
</html>
