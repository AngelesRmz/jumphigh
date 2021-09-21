<?php
    require 'php/mensajero.php';
    
    
    if(!empty($_POST)){
        mensaje(); 
    }   
    // }else{
    
    //     session_start();
    //     if(isset($_SESSION['idUser'])){
    //          session_unset();
    //          session_destroy();
    //     }
    // }
    
   
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/hYu.css">
    <script src="js/funciones.js"></script>
    <script src="js/validacionesRegistro.js"></script>
    <script src="js/navegador.js"></script>
    <script src="js/validacionesEmail.js"></script>

    <title>Horario y Ubicación</title>

    <script>
      
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
                    <li><a href="#">Áreas</a></li>
                    <li><a style="color: red;" href="#">Horario y Ubicación</a ></li>
                    <li><a href="#">Reservar</a></li>
                    <li>
                        <input id="registro" type="button" value="Registrarse">
                    </li>
                </ul>
            </nav>

        </div>
    </header> 

    <section class="border-red">
        <div class="register" id="rDone">
            <div id="registerCont">
              
                <div id="textoR">
                        <p id="hecho" class="direcc" >Direcci&oacute;n</p>
                        <p class="abajo">La fe</p>
                        <p id="dir" >Av. Acapulco, Plaza Bonita </br>
                                                            Col. Residencial Santa Fe
                        </p>
                        <p id="dir" >67117 Guadalupe, Nuevo León </br>
                                                            México
                        </p>
                </div>    
                
                <div id="textoR" class="Contact">
                        <p id="hecho" class="contact" >Contacto</p>
                        <p id="llamar" class="abajo">Puedes llamarnos al:</p>
                            <p id="tel" >Tel: 82653298</p>
                            <p id="llamar" class="abajo">O envianos un correo</p>
                         
                                     <form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="email_form"  id="email_form" class="forma" autocomplete="off">
                
                                        <span id="sesion" class="spans">

                                            <div class="inputs">
                                                <label for="inp" class="inp">
                                                    <input type="text" name="emailCorreo" id="emailCorreo" class="inp" placeholder="&nbsp;">
                                                    <span class="label">Tu correo</span>
                                                    <span class="border"></span>
                                                    <div id="eCorreo" class="error2">Errores</div>
                                                </label>
                                            </div>

                                            <div class="inputs">
                                                <label for="inp" class="inp">
                                                    <input type="text" name="asuntoCorreo" id="asuntoCorreo" class="inp" placeholder="&nbsp;">
                                                    <span class="label">¿Qué nos quieres preguntar?</span>
                                                    <span class="border"></span>
                                                    <div id="eAsunto" class="error2">Errores</div>
                                                </label>
                                            </div>
                                            
                                            <div class="inputs">
                                                <label for="inp" class="inp">
                                                    <input type="text" name="nomCorreo" id="nomCorreo" class="inp" placeholder="&nbsp;">
                                                    <span class="label">Tu nombre</span>
                                                    <span class="border"></span>
                                                    <div id="eNombre" class="error2">Errores</div>
                                                </label>
                                            </div>
                                            
                                            <div class="inputs">
                                                <label for="inp" class="inp">
                                                    <textarea name="msjCorreo" id="msjCorreo" rows="4" cols="50" placeholder="Escribenos tus dudas" ></textarea>
                                                    <div id="eMensaje" class="error2">Errores</div>
                                                </label>
                                            </div>

                                        </span>


                                         <div id="buttonid" class="sendmail">
                                            <input  name="" id="btnEnviarMail" type="button" value="Enviar" class="boton">
                                        </div>

                                </form>
                                                        
                </div>
                
                <div id="textoR" class="horario">
                        <p id="hecho" class="hora" >Horario</p>
                        <p id="dias" class="abajo">Lunes a Viernes</p>
                            <p id="hora" >12PM a 8PM</p>
                            
                            <p id="dias" class="abajo">Sábado</p>
                            <p id="hora" >12PM a 10PM</p>
                </div>
                
                    
                        
            </div>
        </div>
    </section>

</body>
</html>