<?php include 'sidebar.php'; ?>

<div class="containerlist">
    <div class="main-contentlist">
        <h1 class="title">Lista de Equipos</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID_EQUIPO</th>
                        <th>Tipo de Equipo</th>
                        <th>SKU</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nombre del Equipo</td>
                        <td>12345</td>
                        <td class="action-buttons">
                            <button class="btn-edit"><i class="fas fa-edit"></i></button>
                            <button class="btn-delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- Repite las filas según sea necesario -->
                </tbody>
            </table>
        </div>
        <div class="button-group">
            <button class="btn-add" onclick="window.location.href='ingresarEquipo.php'">Agregar Equipo</button>
        </div>
    </div>
</div>
