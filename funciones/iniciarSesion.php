<?php
 include 'conexion.php';



 if(isset($_POST['action'])){
    $action = $_POST['action'];

    if($action=="iniciar")
    login();
 }


 function login(){

    $correo = $_POST["mail"];
    $pass = $_POST["pass"];


    $con = conectar();
         
        $login = "CALL sp_obtenerUsuario('$correo', '$pass')";
        $resultado = mysqli_query($con, $login);

        if($resultado){
            $num_rows = mysqli_num_rows($resultado);
            mysqli_close($con);  

            if($num_rows>0){
                $con2 = conectar();

                $datos = "CALL sp_datosCliente('$correo', '$pass')";
                $resultado2 = mysqli_query($con2, $datos);

                if($resultado2){
                    $datosAll = mysqli_fetch_array($resultado2, MYSQLI_ASSOC);

                    // $rows = array();
                    // while( $r = $result->fetch_assoc()) {
                    //     $rows[] = $r;
                    // }
                    // echo json_encode($rows);

                    session_start(); 
                        $_SESSION['idCliente'] = $datosAll["idCliente"];
                        $_SESSION['nombre'] = $datosAll["nombre"];
                        $_SESSION['apellidos'] = $datosAll["apellidos"];
                        $_SESSION['correo'] = $datosAll["correo"];
                        $_SESSION['pass'] = $datosAll["pass"];
                        $_SESSION['tel'] = $datosAll["tel"];

                        echo "<script>";
                        echo "alert('Logeado. Bienvenido(a)');";
                        echo "window.location = 'index.php';";
                        echo "</script>";
                }else{
                    echo "Problema al obtener datos del cliente: " . $mysqli->error;	
                }  
            }else{
                
                echo "No hay cliente con estos datos: " . $mysqli->error;	
            }
                // echo "<script>";
                // echo "window.location = 'index.php';";
                // echo "</script>";
        }else{
            echo "Problema al consultar cliente: " . $mysqli->error;	

        }
    mysqli_close($con2);  
}