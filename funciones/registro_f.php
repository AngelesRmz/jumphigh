<?php
 include 'conexion.php';

 if(isset($_POST['action'])){
    $action = $_POST['action'];

    if($action=="agregarCliente")
    registrar();
 }





function registrar(){

    $nombre = $_POST["nombre"];
    $tel = $_POST["tel"];
    $contra = $_POST["contra"];
    $apellidos = $_POST["apellido"];
    $correo = $_POST["correo"];
       
    insertar($nombre, $tel, $contra, $apellidos, $correo);

}


function insertar($nombre, $telef, $contra, $ap, $correo){
    $con = conectar();
         
        $insertar = "CALL sp_registrar('$nombre', '$ap', '$correo', '$contra', '$telef')";
        $resultado = mysqli_query($con, $insertar);
                
                if($resultado){
                 
                            echo "<script>";
                            echo "alert('Registrado. Bienvenido(a)');";
                            echo "window.location = 'IniciarSesion.php';";
                            echo "</script>";
                                        
                }else{
                        echo "<script>";
                        echo "alert('Error al intentar registrar, intente de nuevo');";
                        echo "window.location = 'Registro.php';";
                        echo "</script>"; 
                }
        mysqli_close($con);        
    }	

