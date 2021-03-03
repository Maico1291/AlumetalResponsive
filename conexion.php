<?php

   $conexion = mysqli_connect('localhost','root','','alumetal');

   if(!$conexion)
   {

    echo 'Error de conexion a base de datos de Alumetal';
   }
   else{
  
     echo'conectado a la base de datos';

   }

?>