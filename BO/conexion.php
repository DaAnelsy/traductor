<?php
    $conexion = mysqli_connect("localhost","root","","traductor");
   
    //verificar la conexion
    if(!$conexion){
        die("Coneccion Fallida: ".mysqli_connect_error());
    }
  


?>
