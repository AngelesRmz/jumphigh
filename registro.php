<?php
    include 'funciones/registro_f.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script type="text/javascript" src="lib/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/registro-css.css">

    <title>Registrarse</title>

    <script>
        $('document').ready(function(){

            $('.menu-icon').click(function(){

                if($('.navigation ul').hasClass('show')){
                    $('.navigation ul').removeClass('show');
                }else{
                    $('.navigation ul').addClass('show');
                }

            });

            $('#sesion').click(function(){
                window.location="IniciarSesion.php";
            });

            $(".boton").click(function(){
                var nom = $('#nom').val();
                var tel = $('#tel').val();
                var cont = $('#cont').val();
                var ap = $('#ap').val();
                var correo = $('#correo').val();
                var confContr = $('#confContra').val();

                if(cont!=confContr)
                    alert('Las contraseñas no coinciden');

                if(nom==""){
                    alert('Falta llenar campo de nombre');
                }else 
                    if(tel==""){
                        alert('Falta llenar campo de telefono');
                    }else
                        if(cont==""){
                            alert('Falta llenar campo de contraseña');
                        }else       
                    if(ap==""){
                        alert('Falta llenar campo de apellido');
                    }else
                        if(correo==""){
                            alert('Falta llenar campo de correo');
                        }else
                            if(confContr==""){
                                alert('Falta llenar campo de conformar contraseña');
                            }else{

                                var datosEnviar = {
                                    action: 'agregarCliente',
                                    nombre: nom,
                                    tel: tel,
                                    contra: cont,
                                    apellido: ap,
                                    correo: correo
                                }
                                
                                $.ajax({
                                    url: 'funciones/registro_f.php',
                                    async: true,
                                    type: 'POST',
                                    data: datosEnviar,


                                    success: function(respuestaDelWS){
                                        alert('Registrado correctamente. Bienvenido')
                                        window.location="IniciarSesion.php";

                                    }, error: function(x,h,r){
                                        alert("Error: " + x + h + r);
                                    }
                                });
                            }

                


               
            });

            // $('#pass2').keyup(function(){

            //     var pass1 = $('#pass1').val();
            //     var pass2 = $('#pass2').val();

            //     if (pass1 == pass2){
                
            //     }else{
            //         $('#error2').text('Contraseñas no coinciden').css("color", "red");
            //     }

            //     if(pass2 == "" || pass1==""){
            //         $('#error2').text('Escribir contraseñas');
            //     }

            // });



        });
    </script>

</head>
<body>

    <header class="header">
        <img id="logo" src="./images/logo.png" alt="Error al cargar" />

        <div class="container logo-nav-container" >
            <a href="#" class="logo"></a>

            <span class="menu-icon">Ver menú</span>

            <nav class="navigation">
                <ul>
                    <li class="nav-text"><a>¿Ya tienes cuenta?</a></li>
                    <li>
                        <input id="sesion" type="button" value="Iniciar Sesión">
                    </li>
                </ul>
            </nav>

        </div>
    </header> 

    <section class="border-red">

        <div class="register">
            <p id="qualio">Permitenos tus datos</p>
            <p id="typo">Podrás reservar nuestras instalaciones registrandote y haciendo login</p>

            <form class="forma" autocomplete="off">
                
                    <span class="spans">
                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="text" id="nom" class="inp" placeholder="&nbsp;" tabindex="1">
                                <span class="label">Nombre</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="text" id="tel" class="inp" placeholder="&nbsp;" tabindex="3">
                                <span class="label">Telefono</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="password" id="cont" class="inp" placeholder="&nbsp;" tabindex="5">
                                <span class="label" >Contraseña</span>
                                <span class="border"></span>
                            </label>
                        </div>
                    </span>

                    <span class="spans">
                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="text" id="ap"  class="inp" placeholder="&nbsp;" tabindex="2">
                                <span class="label">Apellidos</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="text" id="correo" class="inp" placeholder="&nbsp;" tabindex="4">
                                <span class="label">Correo</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="password" id="confContra" class="inp" placeholder="&nbsp;" tabindex="6">
                                <span class="label">Confirmar contraseña </span> 
                                <span class="border"></span>
                            </label>
                        </div>
                        <!-- <div id="error2"></div> -->
                        <p id="info">*Todos los datos son requeridos.</p>
                        <!-- <p class="e2" id="error2"> </p> -->
                    </span>

                    <div id="buttonid">
                        <input type="button" value="Registrarse" class="boton">
                    </div>
                
            </form>

            
           

        </div>

    </section>

</body>
</html>