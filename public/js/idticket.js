window.addEventListener("DOMContentLoaded", () => {
    $(document).on("click", ".open-modal", function () {
      // Captura el valor de data-id del botón clickeado
      var ticketId = $(this).data("id");
  
      // Asigna el valor capturado al campo oculto del formulario dentro del modal
      $("#ticketId").val(ticketId);
  
      // Opcional: Puedes también cargar otros datos al formulario con AJAX si es necesario
    });
});