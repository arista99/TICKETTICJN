window.addEventListener('DOMContentLoaded', () => {

    $(document).ready(function(){
        let cboEsta = document.getElementById("cbo_esta");
        let observacionContainer = document.getElementById("observacionContainer");

        // Evento para detectar cambios en el select
        $('#cbo_esta').click("change", function () {
            let selectedOption = cboEsta.options[cboEsta.selectedIndex];
            let estadoNombre = selectedOption.getAttribute("data-nom-esta");

            // Mostrar el textarea si el estado es "Observador"
            if (estadoNombre === "observado") {
                observacionContainer.style.display = "block";
            } else {
                observacionContainer.style.display = "none";
            }
        });
    });
});