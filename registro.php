<?php


 include 'conexion.php';

   $nombre = $_POST["nombre"];

   $apellido = $_POST["apellido"];

   $dni = $_POST["dni"];

   $correo = $_POST["correo"];


   $insertar = "INSERT INTO usuario(nombre, apellido, dni, correo) VALUES ('$nombre','$apellido','$dni','$correo')";


   $resultado = mysqli_query($conexion, $insertar);

   if(!$resultado)
   {

     echo 'error al registrar';
   }
   else{

       'Usuario registrado correctamente';
   }

   mysqli_close($conexion);

?>