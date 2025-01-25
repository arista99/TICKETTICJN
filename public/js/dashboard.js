window.addEventListener('DOMContentLoaded', () => {

    // $(document).ready(function () {
    //     let ultimoTicketId = null; // Variable para almacenar el último ticket ID mostrado
    
    //     if ($('#count_ticket').val() >= 1) {
    //         setInterval(dataTicketAjax, 3000); // Consulta cada 3 segundos
    //     }
    
    //     function dataTicketAjax() {
    //         let div_ticket = $('#card-ticket');
    
    //         $.ajax({
    //             data: { ultimoTicketId: ultimoTicketId }, // Enviar el último ticket ID al backend
    //             dataType: 'html',
    //             type: 'POST',
    //             url: 'obtenerListaTicket',
    //         }).done(function (dataDevolucion) {
    //             if (dataDevolucion.trim() !== "SIN_CAMBIOS") {
    //                 div_ticket.append(dataDevolucion);
    
    //                 // Actualizar el último ticket ID
    //                 const lastTicket = div_ticket.find('.col-md-4:last h4').text().match(/\d+/);
    //                 if (lastTicket) {
    //                     ultimoTicketId = parseInt(lastTicket[0]);
    //                 }
    //             }
    //         });
    //     }
    // });
});