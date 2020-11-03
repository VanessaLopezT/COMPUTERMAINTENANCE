<?php

    $usuario = "root"; 
    $password = "";  
    $servidor = "localhost"; 
    $basededatos ="formulario3"; 


//error de conexion "Error con el servidor de la Base de datos".
$conexion = mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//error de conexion "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


    //recuperar las variables
    $telefono3=$_POST['telefono3']; 
    $email3=$_POST['email3']; 
    $mensaje3=$_POST['mensaje3'];  

    //sentencia sql
    $sql="INSERT INTO datos3 VALUES ('$telefono3', '$email3', '$mensaje3')"; //trae los valores 
    
    //ejecuta la centencia de sql
    $ejecutar = mysqli_query($conexion, $sql);

    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; 
    }
    echo "Formulario Enviado Correctamente <br><a href='index.html'>volver</a>";
?>﻿