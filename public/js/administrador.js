window.addEventListener("DOMContentLoaded", () => {
  
  function cargarFilasTicket() {
      $.ajax({
          url: 'obtenerListaTicket', // Cambia esto por la URL de tu controlador
          type: 'GET', // Puede ser POST si envías parámetros
          dataType: 'html',
          success: function (response) {
              $('#ticket-body').html(response); // Rellenar el tbody con las filas
          },
          error: function () {
              alert('Error al cargar los tickets.');
          }
      });
  }

  // Llamar a la función al cargar la página
  cargarFilasTicket();

  // Opcional: recargar el tbody cada cierto tiempo
  setInterval(cargarFilasTicket, 10000); // Actualiza cada 60 segundos
});
