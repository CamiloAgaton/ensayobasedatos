<?php
    $conexion= new mysqli("localhost","root","","registro");
    isset($_POST['cedula']);
    if($conexion->connect_error){
        $error= "Error en la conexión: ".$conexion->connect_errno." mensaje: ".$conexion->connect_error;
        die($error);   
    }

    $consultaSQL="SELECT * FROM tabladata WHERE documentacion=".$_POST['cedula']." AND password=".$_POST['contra'];
    print($consultaSQL);
    //se pregunta si se logra hacer la consulta
    if($resultadoconsulta= $conexion->query($consultaSQL)){
        //se obtiene resultado?
        if(mysqli_num_rows($resultadoconsulta)!=0){
            print("El usuario existe");
        }
        else{
            print("No existe");
            }
    }
    
?>