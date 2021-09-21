<?php
    require 'php/sesion.php';
    
    
    if(!empty($_POST)){
        login();    
    }else{
    
        session_start();
        if(isset($_SESSION['idUser'])){
             session_unset();
             session_destroy();
        }
    }
    
   
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/sesion.css">
    <script src="js/funciones.js"></script>
    <script src="js/validacionesIniciarSesion.js"></script>
    <script src="js/navegador.js"></script>

    <title>Iniciar Sesion</title>

    <script>
        $('document').ready(function(){

            $('.menu-icon').click(function(){

                if($('.navigation ul').hasClass('show')){
                    $('.navigation ul').removeClass('show');
                }else{
                    $('.navigation ul').addClass('show');
                }

            });


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
                    <li class="nav-text"><a>¿Aún no tienes cuenta?</a></li>
                    <li>
                        <input id="registro" type="button" value="Registrarse">
                    </li>
                </ul>
            </nav>

        </div>
    </header> 

    <section class="border-red">

        <div class="register">
            <p id="qualio">Ingresar</p>
            <p id="typo">Reserva y disfruta de nuestras atracciones</p>

            <form action="<?php $_SERVER['PHP_SELF']?> " method="post" name="FormLogin"  id="formlg" class="forma" autocomplete="off">
                
                    <span id="sesion" class="spans">

                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="text" name="emailLog" id="Scorreo" class="inp" placeholder="&nbsp;">
                                <span class="label">Correo electrónico</span>
                                <span class="border"></span>
                                <div id="eEmail" class="error2">Errores</div>
                            </label>
                        </div>

                        <div class="inputs">
                            <label for="inp" class="inp">
                                <input type="password" name="passLog" id="Spass" class="inp" placeholder="&nbsp;">
                                <span class="label">Contraseña</span>
                                <span class="border"></span>
                                <div id="ePass" class="error2">Errores</div>
                            </label>
                        </div>
                      
                    </span>

                    
                    <div id="buttonid">
                        <input  name="" id="btnAcceder" type="button" value="Acceder" class="boton">
                    </div>
                
            </form>

        </div>

    </section>

</body>
</html>