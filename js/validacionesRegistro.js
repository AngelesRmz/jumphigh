$('document').ready(function(){

    $('.error2').css("opacity", 0);

    $('.menu-icon').click(function(){

        if($('.navigation ul').hasClass('show')){
            $('.navigation ul').removeClass('show');
        }else{
            $('.navigation ul').addClass('show');
        }

    });

    $('#pass2').keyup(function(){

        var pass1 = $('#pass1').val();
        var pass2 = $('#pass2').val();

        if (pass1 == pass2){
            $('#ePass1.error2').css("opacity", 0);
            $('#ePass2.error2').css("opacity", 0);
        }else if(pass1 != pass2 && pass1 != ""){
            $('#ePass2.error2').css("opacity", 100);
            $('#ePass2.error2').text('No coinciden');
        }

        if(pass1==""){
            $('#ePass1.error2').css("opacity", 100);
            $('#ePass1.error2').text('Falta llenar');
        }else{
            $('#ePass1.error2').css("opacity", 0);
            $('#ePass1.error2').text('Falta llenar');
        }

    });

    $('#pass1').keyup(function(){

        var pass1 = $('#pass1').val();
        var pass2 = $('#pass2').val();

        if (pass1 != "" && pass2 != ""){ //Valores en blanco
            $('#ePass1.error2').css("opacity", 0);
            $('#ePass2.error2').css("opacity", 0);
        }

        if (pass2 != "" && pass2 != pass1){ // Las contraseñas no coinciden
            $('#ePass1.error2').css("opacity", 100);
            $('#ePass1.error2').text('No coinciden');
        }

        if (pass1 != "" ){ //Contraseña 1 llenada
            $('#ePass1.error2').css("opacity", 0);
        }

       
    });

    $('#pass1').blur(function(){
            $('#ePass1.error2').css("opacity", 0);
    });

    $('#correo').blur(function(){
        $('#ePass1.error2').css("opacity", 0);
        $('#eCorreo.error2').css("opacity", 0);
    });

    $('#correo').keyup(function(){
        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if (regex.test($('#correo').val().trim())) {
            $('#eCorreo.error2').css("opacity", 100);
            $('#eCorreo.error2').css("color", "green");
            $('#eCorreo.error2').text('Correo válido');
        } else {
            $('#eCorreo.error2').css("opacity", 100);
            
            $('#eCorreo.error2').text('Correo no validado');
        }
    });


    $('#btnEnviarRegistro').click(function(){
        var nom = $('#nombre').val();
        var apell = $('#apell').val();
        var tel = $('#tel').val();
        var pass = $('#pass1').val();
        var pass2 = $('#pass2').val();
        var correo = $('#correo').val();

        if(nom == ""){
            $('#eNom.error2').css("opacity", 100);
            $('#eNom.error2').text('Favor de llenar dato');
        }

        if(apell == ""){
            $('#eAp.error2').css("opacity", 100);
            $('#eAp.error2').text('Favor de llenar dato');
        }

        if(tel == ""){
            $('#eTel.error2').css("opacity", 100);
            $('#eTel.error2').text('Favor de llenar dato');
        }

        if(pass == ""){
            $('#ePass1.error2').css("opacity", 100);
            $('#ePass1.error2').text('Favor de llenar dato');
        }
        if(correo == ""){
            $('#eCorreo.error2').css("opacity", 100);
            $('#eCorreo.error2').text('Favor de llenar dato');
        }

        if(pass.length < 8){
            $('#ePass1.error2').css("opacity", 100);
            $('#ePass1.error2').text('Favor de completar con requerimiento');
        }
        if(pass.match(/\d/)){
            
        }else{
            $('#ePass1.error2').css("opacity", 100);
            $('#ePass1.error2').text('Favor de completar con requerimiento');
        }
        
        if(nom != "" && apell != "" && tel != "" && pass != "" && correo != "" && pass2 != ""){
            registrar();
        }

    });

    $('#btnSesion').click(function(){
        window.location="iniciarsesion.html";
    });

});