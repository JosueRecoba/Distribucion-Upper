<?php
$current_page = basename($_SERVER['PHP_SELF']);

// Definir las subpáginas para cada página principal
$subpages = [
    'ingresarContrato.php' => ['listaContratos.php', 'nuevoRegistro.php'],
    'ingresarEquipo.php' => ['listaEquipos.php', 'nuevoRegistroEquipo.php']
];

$active_page = $current_page;

foreach ($subpages as $main_page => $sub_page_list) {
    if (in_array($current_page, $sub_page_list)) {
        $active_page = $main_page;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribución Upper Logistics</title>
    <link rel="icon" href="assets/img/ICon-Upper.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-heading">Distribución Upper Logistics</div>
            <div class="list-group">
                <a href="ingresarContrato.php" class="list-group-item <?php echo $active_page == 'ingresarContrato.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-contract"></i> Ingresar Contrato
                </a>
                <a href="ingresarEquipo.php" class="list-group-item <?php echo $active_page == 'ingresarEquipo.php' ? 'active' : ''; ?>">
                    <i class="fas fa-laptop"></i> Ingresar Equipo
                </a>
                <a href="verListas.php" class="list-group-item <?php echo $active_page == 'verListas.php' ? 'active' : ''; ?>">
                    <i class="fas fa-list"></i> Ver Listas
                </a>
                <a href="generarEtiqueta.php" class="list-group-item <?php echo $active_page == 'generarEtiqueta.php' ? 'active' : ''; ?>">
                    <i class="fas fa-tag"></i> Generar Etiqueta
                </a>
            </div>
        </div>
