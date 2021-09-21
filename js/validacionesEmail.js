$('document').ready(function(){

    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        $('#emailCorreo').keyup(function(){
            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    
                if (regex.test($('#emailCorreo').val().trim())) {
                    $('#eCorreo.error2').css("opacity", 100);
                    $('#eCorreo.error2').css("color", "green");
                    $('#eCorreo.error2').text('Correo válido');
                } else {
                    $('#eCorreo.error2').css("opacity", 100);
    
                    $('#eCorreo.error2').text('Correo no válido');
                }
           });
           
    $('#btnEnviarMail').click(function(){


        var email = $('#emailCorreo').val();
        var asunto = $('#asuntoCorreo').val();
        var nombre = $('#nomCorreo').val();
        var mensaje = $('#msjCorreo').val();

        

    
        if(email == ""){
            $('#eCorreo.error2').css("opacity", 100);
            $('#eCorreo.error2').text('Favor de llenar dato');
        }else{
            $('#eCorreo.error2').css("opacity", 0);
        }

        if(asunto == ""){
            $('#eAsunto.error2').css("opacity", 100);
            $('#eAsunto.error2').text('Favor de llenar dato');
        }else{
            $('#eAsunto.error2').css("opacity", 0);
        }

        if(nombre == ""){
            $('#eNombre.error2').css("opacity", 100);
            $('#eNombre.error2').text('Favor de llenar dato');
        }else{
            $('#eNombre.error2').css("opacity", 0);
        }

        if(mensaje == ""){
            $('#eMensaje.error2').css("opacity", 100);
            $('#eMensaje.error2').text('Favor de llenar dato');
        }else{
            $('#eMensaje.error2').css("opacity", 0);
        }

      

        if(email != "" && asunto != "" && nombre != "" && mensaje != ""){
            $('form#email_form').submit();                                  
        }

        
    });

});