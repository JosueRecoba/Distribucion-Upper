<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Master</title>
    <link rel="icon" href="../assets/img/ICon-Upper.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../sidebar.php'; ?>

    <div class="containerlist">
        <div class="main-contentlist">
            <h1 class="title">Tabla Master</h1>
            <div class="filter-sec">
                <button id="anterior">Anterior</button>
                <span id="pagina-actual">Página 1 de 20</span>
                <button id="siguiente">Siguiente</button>
                <button id="descargar" class="btn-download">Descarga master</button>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
