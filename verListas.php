<!-- verListas.php -->
<?php include 'sidebar.php'; ?>
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
                    <tr>
                        <td>1</td>
                        <td>Nombre del Contrato</td>
                        <td>Tipo de equipo</td>
                        <td>Estado</td>
                        <td>SN</td>
                        <td>123</td>
                        <td><button class="btn-print"><i class="fas fa-print"></i></button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nombre del Contrato</td>
                        <td>Tipo de equipo</td>
                        <td>Estado</td>
                        <td>SN</td>
                        <td>123</td>
                        <td><button class="btn-print"><i class="fas fa-print"></i></button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nombre del Contrato</td>
                        <td>Tipo de equipo</td>
                        <td>Estado</td>
                        <td>SN</td>
                        <td>123</td>
                        <td><button class="btn-print"><i class="fas fa-print"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="button-group">
            <button class="btn-gd" onclick="guardarDatos()">Guardar datos</button>
            <button class="btn-generate" onclick="generarEtiquetas()">Generar etiquetas</button>
            <button class="btn-download" onclick="descargarMaster()">Descarga master</button>
        </div>
    </div>
</div>