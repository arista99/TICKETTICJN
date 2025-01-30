window.addEventListener("DOMContentLoaded", () => {
  $(document).ready(function () {
    // Solicitar el último número de ticket al cargar la página
    actualizarNumeroTicket();

    function actualizarNumeroTicket() {
      $.ajax({
        url: "obtenerTickets", // Archivo PHP para obtener el número de ticket
        type: "GET",
        success: function (response) {
          // Actualizar el input con el número de ticket obtenido
          $("#cbo_nom").val(response);
        },
        error: function () {
          alert("Error al obtener el número de ticket. Intente nuevamente.");
        },
      });
    }
  });
});
