<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribución Upper Logistics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-heading">Distribución Upper Logistics</div>
            <div class="list-group">
                <a href="ingresarContrato.php" class="list-group-item <?php echo $current_page == 'ingresarContrato.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-contract"></i> Ingresar Contrato
                </a>
                <a href="ingresarEquipo.php" class="list-group-item <?php echo $current_page == 'ingresarEquipo.php' ? 'active' : ''; ?>">
                    <i class="fas fa-laptop"></i> Ingresar Equipo
                </a>
                <a href="verListas.php" class="list-group-item <?php echo $current_page == 'verListas.php' ? 'active' : ''; ?>">
                    <i class="fas fa-list"></i> Ver Listas
                </a>
                <a href="generarEtiqueta.php" class="list-group-item <?php echo $current_page == 'generarEtiqueta.php' ? 'active' : ''; ?>">
                    <i class="fas fa-tag"></i> Generar Etiqueta
                </a>
            </div>
        </div>
