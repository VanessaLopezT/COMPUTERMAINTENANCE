<?php

    $usuario = "root"; 
    $password = "";  
    $servidor = "localhost"; 
    $basededatos ="formulario2"; 

//error de conexion "Error con el servidor de la Base de datos".
$conexion = mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 

//error de conexion "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");

    //recuperar las variables
    $nombre2=$_POST['nombre2']; 
    $direccion2=$_POST['direccion2']; 
    $horario2=$_POST['horario2']; 
    $correo2=$_POST['correo2']; 
    $numero2=$_POST['numero2']; 

    //sentencia sql
    $sql="INSERT INTO datos2 VALUES ('$nombre2', '$direccion2','$horario2', '$correo2', '$numero2')"; //trae los valores 
    
    //ejecuta la centencia de sql
    $ejecutar = mysqli_query($conexion, $sql);

    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; 
    }
    echo "Formulario Enviado Correctamente <br><a href='index.html'>volver</a>";
?>﻿