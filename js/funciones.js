function registrar(){

    var nom, apell, tel, pass, correo;

    nom = $('#nombre').val();
    apell = $('#apell').val();
    tel = $('#tel').val();
    pass = $('#pass1').val();
    correo = $('#correo').val();
    
    var dataSend = {
        nombre : nom,
        apellido : apell,
        telefono :  tel,
        pass: pass,
        correo: correo,
        action : 'registrar'
    };

    $.ajax({
        url: 'php/servicios.php',
        async: true,
        method:'POST',
        data: dataSend,
        // dataType:'json',
        success : function(respuestaDelServidor){
            if(respuestaDelServidor == 'Registrado'){
                //hacer que se muestre lo de FB y se esconda lo demas
                window.location="registrado.html";
                // mostrar_compartirFB();
                //mostrar_menuIni()
                //$('#logo').show();
                //$('#scene-section').hide();
            }
     

        },
        error : function(x, y, z){
            alert("Error al intentar registrar.");
            $("#btnEnviar").attr("disabled", false);

        }		
    });

}

function iniciarSesion(){
    var correo, pass;

    correo = $('#Scorreo').val();
    pass = $('#Spass').val();

    var dataSend = {
        correo : correo,
        password : pass,
        action : 'sesion'
    };

    var objetoJSON = JSON.stringify(dataSend);

    $.ajax({
        url: 'php/sesion.php',
        async: true,
        method:'POST',
        data: objetoJSON,
        dataType:'JSON',
        
        success : function(respuestaDelServidor){
            if(respuestaDelServidor.result != 'Error'){
                //hacer que se muestre lo de FB y se esconda lo demas
                window.location="index.php";
                // mostrar_compartirFB();
                //mostrar_menuIni()
                //$('#logo').show();
                //$('#scene-section').hide();
            }

            if(respuestaDelServidor.result == 'NoEncontro'){
                alert('No se encontró');
            }

            if(respuestaDelServidor.result == 'ErrorDatos'){
                alert('No encontrar datos');
            }
            
            if(respuestaDelServidor.result == 'Error'){
                alert('Quien sabe');
            }
        },
        error : function(x,h,r){
            alert("Error: " + x + h + r);
            // $("#btnEnviar").attr("disabled", false);

        }		
    });
}

