<?php include 'sidebar.php'; ?>
<div class="main-content">
    <div class="form-container">
        <h2>¿Qué contrato ingresará?</h2>
        <form id="contratoForm" action="processContrato.php" method="post">
            <input type="text" name="contrato" placeholder="Ingresar Contrato" required>
        </form>
    </div>
    <div class="button-container">
        <button class="btn-lista" onclick="window.location.href='listaContratos.php'">Lista de Contratos</button>
        <button type="button" class="btn-ingresar" onclick="window.location.href='nuevoRegistro.php'">Ingresar</button>
    </div>
</div>

<!-- Script JavaScript para manejar el envío del formulario -->
<script>
    function submitForm() {
        var contratoValue = document.getElementsByName('contrato')[0].value.trim();

        if (contratoValue === '') {
            alert('Por favor, ingresa el contrato.');
            return; 
        }
        document.getElementById('contratoForm').submit();
    }
</script>
