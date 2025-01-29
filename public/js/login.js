$('#btn-loginU').click(function (event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
    
    let datos = $('#frmAjaxLogin').serialize(); // Serializa los datos del formulario

    $.ajax({
        type: 'POST',
        url: 'Login', // Ruta del controlador PHP
        data: datos,
        dataType: 'json', // Indicamos que esperamos un JSON
        success: function (response) {
            if (response.status === "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'Bienvenido',
                    timer: 1500,
                    showConfirmButton: false
                }).then(function () {
                    window.location.href = response.redirect; // Redirige según el rol
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: response.message,
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Error en la conexión',
                timer: 2000,
                showConfirmButton: false
            });
        }
    });
});
