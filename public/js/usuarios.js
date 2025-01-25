window.addEventListener('DOMContentLoaded', () => {

    $(document).ready(function(){
        //COMBO BOX DONDE SE VA PINTAR LOS DATOS
        let cbo_usuario = $('#cbo_usuario');

        $('#cbo_area').click(function(){

            let id_area = $(this).val();
            
            console.log('id del area', id_area);

            $.ajax({
                data: {dato_mandar_servidor:id_area}, //dato que se manda al backend 
                dataType: 'html',
                type: 'POST',
                url: 'obtenerUsuarios',

            }).done(function(dataDevolucion){ 
                //PINTAMOS LOS DATOS EN EL COMBO BOX CBO_USUARIO
                cbo_usuario.html(dataDevolucion);
                console.log(dataDevolucion);
            });
        });
    });
});