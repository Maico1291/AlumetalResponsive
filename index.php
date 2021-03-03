<?php

 include('conexion.php');
 
 $usuarios= "SELECT * FROM usuarios";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     
    
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <title>Alumetal S.A</title>
</head>
<body>
    <header class="header">

         <div class="container logo-nav-container">

              <img src="img/alumetal.png" alt="">

               <span class="menu-icon">Ver menú	</span>

                     <nav class="navigation"> 
           
                          <ul>
                           
                               <li>
                               
                                   <a href="#">Home</a>
                             
                              </li>


                             
                        <li>
                               
                               <a href="#">Producto</a>
                             
                        </li>



                        <li>
                               
                               <a href="#">Servicio</a>
                             
                        </li>
                                  
                                  
                 
                        <li>
                               
                               <a href="#">Iniciar Sesion</a>
                             
                        </li>
                                  
                                  
                 
                 
                 
                 </ul>
   
           </nav>
        </div>
    </header>




     <main class="main">

        <div class="container">
        
        
         <h1>Formulario de Registro</h1>


         <form action="registro.php" method="post">

            <div class="contenedor-inputs">

              <input type="text1" id="nombre" name="nombre" placeholder="Nombre" required>

              <input type="text1" id="apellido" name="apellido" placeholder="Apellido" required>

              <input type="text1" id="dni" name="dni" placeholder="DNI" required>

              <input type="text1" id="correo" name="correo" placeholder="Correo" required>



              <input type="submit" value="Registrar" class="btn-enviar">

          </div>

         </form>


            
        </div>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     </main>

   



















      
       <footer class="footer">

         <div class="container">
         

         </div>
       
       </footer>



 
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts.js"></script>
</body>
</html>