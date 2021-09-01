<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header('location: index.php');
    }


?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos2.css">
  <link rel="stylesheet" href="flaticon.css">
  <script src="https://kit.fontawesome.com/d069aff505.js" crossorigin="anonymous"></script>
  <title>JAnDa fit</title>
</head>

<body>


  <section>
    <div class="row">
      <div class="col">
        <!-- Just an image -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
            <img src="Logo2.png" style="width: 150px;" alt="Logo" loading="lazy">
          </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-titulo" id="navbarNav" >
    <ul class="navbar-nav ml-auto" id="menu" style="text-align: center;">
      <li class="nav-item active">
        <a class="nav-link" href="#videos" style="color: black;">Videos Curso</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#beneficios" style="color: black;">Blog</a>
      </li> -->
      
      
        
            <?php if(isset($_SESSION['user'])){ ?>
                    <li class="nav-item text-titulo">
                        <a class="nav-link" href="logout.php"><?php $_SESSION['user']['email'] ?>Cerrar Sesión</a>
                    </li>
                    <?php }?>      
        
         
                        
                      
                      </div>
                    </div>
                  </div>
                </div>
              </li>
    </ul>
  </div>
</nav>
        <!-- <nav class="navbar navbar-dark  bg-light">
          <a class="navbar-brand" href="#">
            <img src="Logo2.png" style="width: 150px;" alt="Logo" loading="lazy">
          </a>
          <nav class="d-flex text-titulo ">
            <ul id="menu" class="nav nav-pills d-flex  aling-items-center ">
              <li class="nav-item">
                    <?php if(isset($_SESSION['user'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><?php $_SESSION['user']['email'] ?>cerrar sesion</a>
                    </li>
                    <?php }?>
              </li>
            </ul>
          </nav>
        </nav>
      </div>
      </nav> -->

    </div>
    </div>
   
   <section id="videos">
       <div class="container">
        <h2 class="text-titulo" style="text-align: center; margin-top: 25px;/*color: #007bff;*/font-size: 3.5rem;">Cuida tu Cuerpo</h2>
           <div class="row" style="justify-content: center;">
               <div class="card"  style="width: 18rem;margin-right: 15px; margin-bottom: 25px; margin-top: 25px;" >
  <img src="imgInicio/Calentamiento.jpg" id="card-1" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Calentamiento</h5>
    <p class="card-text">Expliaciòn paso a paso de como se deben hacer los estiramientos para comenzar a realizar los ejercicios.</p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="display: block;
    margin-left: auto;
    margin-right: auto;">
  Abrir Video
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calentamiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
            <video width="600" height="300" controls>
              <source src="imgInicio/Calentamiento.mp4" type="video/mp4">
            </video>
          </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>



  </div>
</div>

<!-- segundo video -->
     <div class="card" style="width: 18rem;  margin-bottom: 25px; margin-top: 25px; margin-right: 15px;" >
  <img src="imgInicio/Cardio.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Cardio</h5>
    <p class="card-text">Descubre la importancia del cadio y aprende como fortalecer tu cuerpo y mejorar la salud de tus pulmones y corazón.</p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" style="display: block;
    margin-left: auto;
    margin-right: auto;">
  Abrir Video
</button>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cardio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
            <video width="600" height="300" controls>
              <source src="ejercicio.mp4" type="video/mp4">
            </video>
          </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>



  </div>
</div>
<!-- tercer video -->

<div class="card" style="width: 18rem; margin-right: 15px; margin-bottom: 25px;margin-top: 25px; ">
  <img src="imgInicio/Brazos.jpg" class="card-img-top" alt="...">

  <div class="card-body">
     <h5 class="card-title" style="text-align:center;">Brazos y Piernas</h5>
    <p class="card-text">Tonifica tus piernas y aumenta la fuerza en tus brazos con estos ejercicios.</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1" style="display: block;
    margin-left: auto;
    margin-right: auto;">
  Abrir Video
</button>
<div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Brazos y Piernas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
            <video width="600" height="300" controls>
              <source src="imgInicio/Brazo.mp4" type="video/mp4">
            </video>
          </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>





<!-- cuarto video -->
     <div class="card" style="width: 18rem;  margin-bottom: 25px; margin-top: 25px; " >
  <img src="imgInicio/pronto.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Gluteos</h5>
    <p class="card-text">Trabaja de manera intensa para fortalecer tus gluteos por medio de repeticiones que te ayudaran en tu objetivo.</p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2" style="display: block;
    margin-left: auto;
    margin-right: auto;">
  Abrir Video
</button>

<!-- Modal -->
<div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gluteos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="video embed-responsive embed-responsive-16by9">
            <video width="600" height="300" controls>
              <source src="ejercicio.mp4" type="video/mp4">
            </video>
          </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>



  </div>
</div>








           </div>
       </div>
   </section>

  

  

 <!-- FOOTER -->
 <section class="bg-azul " style="background-color: #b0d0d8;">
   <div class="contenedor">
     <div class="row">
       <div class="col" style="height:20%">
          <p>
          <ul class="mt-4  mb-3 text-texto ">
            Medellin-Antioquia<br>
            Telefono: 5216127<br>
            Correo: <a href="link" class="correo">jandafi@gmail.com</a>
          </ul>
          </p>
       </div>

       <div class="col">
         <ul class="iconos">
            <a href="https://www.facebook.com/JAnDa-fit-113155740545764/?view_public_for=113155740545764" class="fabook"><i class="fab fa-facebook  mb-3 fa-2x fa-lg"></i> </a>

            <a href="https://www.instagram.com/janda_fit/" class="instagram">
              <li class=" fab fa-instagram  ml-3 mb-3 fa-2x fa-lg "></li>
            </a>

          </ul>
       </div>
     </div>

     <div class="row" style="justify-content: center; text-align: center;">
       <p class="footer text-texto">

            l 2020 Derechos Reservados l JAnDafit

          </p>
     </div>

   </div>
 </section>


 <!--  <section >
    <div >
      <div >
        <div class="col  ">
         
        </div>
        <div class="col ">

          
        </div>
        <div class="row" style="justify-content: center; text-align: center;">
          <p class="footer text-texto">

            l 2020 Derechos Reservados l JAnDafit

          </p>
        </div>
      </div>
    </div>
  </section>
 -->







  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>