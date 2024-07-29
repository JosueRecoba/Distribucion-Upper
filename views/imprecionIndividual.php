<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impresión Individual</title>
    <link rel="icon" href="../assets/img/ICon-Upper.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../sidebar.php';?>
    <div class="containerlist">
        <div class="main-contentlist">
            <h1 class="title">Impresión Individual</h1>
            <div class="filter-individual">
                <form id="contratoForm" action="processContrato.php" method="post">
                    <input type="text" name="contrato" placeholder="No Contrato" required>
                </form>
                <form id="tipoEquipoForm" action="processTipoEquipo.php" method="post">
                    <input type="text" name="tipoEquipo" placeholder="Tipo de equipo" required>
                </form>
                <form id="idUnicoForm" action="processIdUnico.php" method="post">
                    <input type="text" name="idUnico" placeholder="ID Único" required>
                </form>
                <form id="rangoIdUnicoForm" class="inline-form" action="processRangoIdUnico.php" method="post">
                    <input type="number" name="idUnicoMin" placeholder="Rango ID Mín" required>
                    <input type="number" name="idUnicoMax" placeholder="Rango ID Máx" required>
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
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Nombre del Contrato</td>
                            <td>Tipo de equipo</td>
                            <td>Estado</td>
                            <td>SN</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Nombre del Contrato</td>
                            <td>Tipo de equipo</td>
                            <td>Estado</td>
                            <td>SN</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Nombre del Contrato</td>
                            <td>Tipo de equipo</td>
                            <td>Estado</td>
                            <td>SN</td>
                            <td>123</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="button-group">
                <button class="btn-rfg">Regresar a filtro general</button>
                <button class="btn-ge">Generar Etiqueta</button>
            </div>
        </div>
    </div>
</body>
</html>
