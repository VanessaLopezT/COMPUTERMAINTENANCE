<?php

    $usuario = "root"; 
    $password = "";  
    $servidor = "localhost"; 
    $basededatos ="formulario1"; 


//error de conexion "Error con el servidor de la Base de datos".
$conexion = mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//error de conexion "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


    //recuperar las variables
    $nombre1=$_POST['nombre1']; 
    $direccion1=$_POST['direccion1']; 
    $ciudad1=$_POST['ciudad1']; 
    $email1=$_POST['email1']; 
    $numero1=$_POST['numero1']; 
    $mensaje1=$_POST['mensaje1']; 

    //sentencia sql
    $sql="INSERT INTO datos1 VALUES ('$nombre1', '$direccion1','$ciudad1', '$email1', '$numero1', '$mensaje1')"; //trae los valores 
    
    //ejecuta la centencia de sql
    $ejecutar = mysqli_query($conexion, $sql);

    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; 
    }
    echo "Formulario Enviado Correctamente <br><a href='index.html'>volver</a>";
?>﻿