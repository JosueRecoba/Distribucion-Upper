<?php include 'sidebar.php'; ?>
<div class="main-content">
    <div class="form-container">
        <h2>¿Qué equipo quiere ingresar?</h2>
        <form id="equipoForm" action="processEquipo.php" method="post">
            <input type="text" name="equipo" placeholder="Ingresar Equipo" required>
            <input type="text" name="sku" placeholder="Ingresar SKU" required>
        </form>
    </div>
    <div class="button-container">
        <button class="btn-lista" onclick="window.location.href='listaEquipos.php'">Lista de Equipos</button>
        <button type="button" class="btn-ingresar" onclick="window.location.href='nuevoRegistroEquipo.php'">Ingresar</button>
    </div>
</div>

<!-- Script para manejar el envío del formulario -->
<script>
    function submitForm() {
        var equipoValue = document.getElementsByName('equipo')[0].value.trim();
        var skuValue = document.getElementsByName('sku')[0].value.trim();

        if (equipoValue === '' || skuValue === '') {
            alert('Por favor, completa todos los campos.');
            return; 
        }
        document.getElementById('equipoForm').submit();
    }
</script>
