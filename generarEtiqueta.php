<?php include 'sidebar.php'; ?>
<div class="coneti">
    <h1>Generar Etiqueta</h1>
    <form id="etiquetaForm" action="processEtiqueta.php" method="post">
        <div class="form-section" id="section-producto">
            <input type="text" id="producto" name="producto" required placeholder="Nombre del Producto">
        </div>
        <div class="form-section" id="section-codigo" style="display: none;">
            <input type="text" id="codigo" name="codigo" required placeholder="Código del Producto">
        </div>
        <div class="form-section" id="section-precio" style="display: none;">
            <input type="text" id="precio" name="precio" required placeholder="Precio">
        </div>
        <div class="form-section" id="section-descripcion" style="display: none;">
            <textarea id="descripcion" name="descripcion" required placeholder="Descripción"></textarea>
        </div>
        <div class="form-section" id="section-submit" style="display: none;">
            <button class="btngen"type="submit">Generar e Imprimir</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".form-section");
    let currentSection = 0;

    sections[currentSection].style.display = "block";

    sections.forEach((section, index) => {
        const input = section.querySelector("input, textarea");
        input.addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                event.preventDefault(); 

                if (input.checkValidity()) {
                    section.style.display = "none";
                    currentSection++;
                    if (currentSection < sections.length) {
                        sections[currentSection].style.display = "block";
                    }
                }
            }
        });
    });
});
</script>
