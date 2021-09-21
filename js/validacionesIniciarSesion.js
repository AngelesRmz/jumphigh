$('document').ready(function(){

    $('.error2').css("opacity", 0);
    
        $('#Scorreo').keyup(function(){
        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

            if (regex.test($('#Scorreo').val().trim())) {
                $('#eEmail.error2').css("opacity", 100);
                $('#eEmail.error2').css("color", "green");
                $('#eEmail.error2').text('Correo válido');
            } else {
                $('#eEmail.error2').css("opacity", 100);

                $('#eEmail.error2').text('Correo no válido');
            }
       });

    $('#btnAcceder').click(function(){
        var correo = $('#Scorreo').val();
        var pass = $('#Spass').val();

        if(correo == ""){
            $('#eEmail.error2').css("opacity", 100);
            $('#eEmail.error2').text('Favor de llenar dato');
        }else{
            $('#eEmail.error2').css("opacity", 0);
        }

        if(pass == ""){
            $('#ePass.error2').css("opacity", 100);
            $('#ePass.error2').text('Favor de llenar dato');
        }else{
            $('#ePass.error2').css("opacity", 0);
        }

        if(correo != "" && pass != ""){
            $('form#formlg').submit();
                                      
        }
        
    });
    
    $('#nomCliente').click(function(){
                $.ajax({
                  method: "POST", //Elige get o post
                  url: "php/cerrarSesion.php",
                  data: {} //parametros que desees enviarles
                })
            
    });

});

//$(document).on('submit', '#formlg', function(event){
//    event.preventDefault();
//    $.ajax({
//        url: 'php/sesion.php',
//        method:'POST',
//        dataType:'json',
//        data: $(this).serialize(),
//        beforeSend: function(){
//            console.log("entro a ajax");
//        
//    },
//            done: function(respuesta){
//                console.log("done");
//                
//            
//        },
//                    fail:function(resp){
//                        console.log("fail");
//                    }
//                    ,
//                            error: function(re){
//                                console.log("error");
////                                $("#btnEnviar").attr("disabled", false);
//
//                            }
//                        });
//});

