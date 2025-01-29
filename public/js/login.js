//LOGEO DE USUARIO VIA AJAX
$('#btn-login').click(function () {
    let datos = $('#frmAjaxLogin').serialize();
    // console.log(datos);
    $.ajax({
        type: 'POST',
        url: 'Login',
        data: datos,
        success: function (r) {
            if (r == 1) {
                console.log('Numero de Retorno : ' + r);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'BIENVENID@',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = "habitacion"; //CAMBIAR POR "PROFILE"
                });
            } else if (r == 0){
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Sus credenciales estan incorrectas!!!!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = "Index";
                });
            }
        }
    })
    return false;
});