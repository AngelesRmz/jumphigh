<?php 
include_once("funciones/conexion.php");
include 'php/servicios.php';
include 'php/dash.php';
    
    session_start();
    if(isset($_SESSION['idUsuario']) || isset($_SESSION['Nombre'])){
        $nomCl = $_SESSION['Nombre'];
    }else{
        $nomCl = "";
    }
   
     date_default_timezone_set("America/Mexico_City");
   $hora =  horario();


    
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="lib/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css//style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css//registro-css.css">
    <link rel="stylesheet" href="css//flexslider.css" type="text/css">
    <link rel="stylesheet" type="text/css" media="screen" href="css//dash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/validacionesIniciarSesion.js"></script>
    <script src="js/navegador.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Jump High</title>


    <script>
        $('document').ready(function(){

            $('.menu-icon').click(function(){

                if($('.navigation ul').hasClass('show')){
                    $('.navigation ul').removeClass('show');
                }else{
                    $('.navigation ul').addClass('show');
                }

            });   
            
            $('#label-mostrarModal').click(function(){

                if($('#modal').hasClass('modal')){
                    $('#modal').removeClass('modal');
                }else{
                    $('#modal').addClass('modal');
                }

            }); 

        });

        $(window).load(function() {
            $('.flexslider').flexslider();
            animation: "slide"
        });

    </script>

</head>
<body id="dash">

    <header class="header">
        <img id="logo" src="./images/logo.png" alt="Los Tejos" />
        <input id="mostrar-modal" name="modal" type="radio" checked /> 
        <label id="label-mostrarModal" for="mostrar-modal"><i title="Dashboard" class="fas fa-info-circle"></i></label>
        <label class="abierto-cerrado" id="label-mostrarModal" for="mostrar-modal"> 
            <i class="far fa-clock"></i>   
            
            <?php
            $horaActual = date("H");
            $abre = $hora[0];
            $cierra = $hora[1];
            if (isset($abre) && isset($cierra)) {
                if ($horaActual >= $abre && $horaActual <= $cierra) { ?>
                    Abierto
            <?php
                }else{ ?>
                        Cerrado
            <?php
             echo "<style>";
             echo " #label-mostrarModal.abierto-cerrado{
                         color: red;
                     }";
             echo "</style>";
                }
            }
            ?>

            
        </label>

        
      

        <div class="container logo-nav-container" >
            <a href="#" class="logo"></a>

            <span class="menu-icon">Ver menú</span>

            <nav class="navigation">
                <ul>
                    <li><a href="#">Áreas</a></li>
                    <li><a id="HU" href="#">Horario y Ubicación</a></li>
                    
                    <li><a href="#">Reservar</a></li>
                    <?php
                        if(isset($_SESSION['idUsuario'])){
                    ?>
                        <li title="Clic para cerrar sesión."><a style="color: red;" id="nomCliente" href=""> <?php echo$nomCl?> </a></li>
                    <?php
                        }else{ 
                    ?>
                            <li><a href="iniciarsesion.php">Iniciar Sesión</a></li>
                            <li title="clic">
                                <input id="registro" type="button" value="Registrarse">
                            </li>
                    <?php
                        }
                    ?>
                    
                </ul>
            </nav>

        </div>
    </header>


    <section  id="fondoDash" class="main">
        <img id="dashBack" src="images/jumparena_3.png" alt="Homepage">

        
            
        <div id="divContainer">
   
            <div id="divTxt">
                <p id="txtDash">Más divertido de lo que te imaginas</p>  
            </div>    
            
            <div id="otras">
               
                <div>
                    
                    <div id="precio">
                        <div id="precio2">
                                <div id="divPrecios">
                                   <div class="precios">
                                    <p class="txtPrecio">$150.00</p>  
                                    <p class="xhora">Por 1hra</p>
                                </div>
                                <div class="precios">
                                    <p class="txtPrecio">$200.00</p>
                                    <p class="xhora">Por 2hrs</p>
                                </div>
                                 <div id="xHora">
                                    <p id="txtTexto">Todas las áreas</p>  
                                 </div>
                            </div>
                            
                           
                        </div>
                    </div>
                   
                </div>
                <div id="btnDiv">
                    <input id="btnQuien" type="button" value="¿Quiénes somos?" class="boton">
                </div>
            </div> 
           
        </div>
    </section>
    
    <section id="dashContainer">
                 
        <div class="divCont">
            
            <h1 class="prom">Dias especiales del mes</h1>
            <p> </br>
                         
                </p>

            <div class="flexslider">
                <ul class="slides">
                <?php

                $dia = date("d");
                $mes = date("m");
                $anio = date("Y");

                $con = conectar();
                
                $imag = "SELECT dia, mes, anio, imagen FROM diaespecial";
                $resultado = mysqli_query($con, $imag);

                if ($resultado) {
                    while($renglon=mysqli_fetch_array($resultado)){
                        $diaD = $renglon['dia'];
                        $mesD = $renglon['mes'];
                        $anioD = $renglon['anio'];
                        $imagenD = $renglon['imagen'];

                        if($diaD>=$dia && $mesD>=$mes && $anioD>=$anio){
                            echo "<li>";
                                echo "<img src= 'imagenes/$imagenD'/>";
                            echo "</li>";
                        }
                    
                    }
                }
                mysqli_close($con);
                ?>

                </ul>
            </div>
            
           
        </div>

      

        <div class="divCont">
            <h1 class="prom"> Promociones del mes</h1>
            <p id="textProm"> Estás promociones son aparte del precio base.</br>
                        Preguntar en caja.
                </p>
                <div class="flexslider">
                    <ul class="slides">
                    <?php

                    $dia = date("d");
                    $mes = date("m");
                    $anio = date("Y");

                    $con = conectar();

                    $imagP = "SELECT dia, mes, anio, imagen FROM promociones";
                    $resultado = mysqli_query($con, $imagP);

                    if ($resultado) {
                        while($renglon=mysqli_fetch_array($resultado)){
                            $diaP = $renglon['dia'];
                            $mesP = $renglon['mes'];
                            $anioP = $renglon['anio'];
                            $imagenP = $renglon['imagen'];

                            if($diaP>=$dia && $mesP>=$mes && $anioP>=$anio){
                                echo "<li>";
                                    echo "<img src= 'imagenes/$imagenP'/>";
                                echo "</li>";
                            }
                        
                        }
                    }
                    mysqli_close($con);
                    ?>
                    </ul>
                </div>
                
        </div>

        
   
        
    </section>

    <div id="modal">
        <div class="flexslider" id="dashModal">
            <ul class="slides">
          
                <li>
                    <img src= 'imagenes/dash/1.png'/>
                </li>
                <li>
                    <img src= 'imagenes/dash/2.png'/>
                </li>
                <li>
                    <img src= 'imagenes/dash/3.png'/>
                </li>
                <li>
                    <img src= 'imagenes/dash/4.png'/>
                </li>
                <li>
                    <img src= 'imagenes/dash/5.png'/>
                </li>
              
            </ul>
        </div>
    </div>
    
</body>
</html>