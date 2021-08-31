<?php
define('PAGE_ROOT', '/Paginaweb2');
if (isset($_POST['envio']))
  require_once('registro.php');
else if (isset($_POST['email']) && !empty($_POST['email']))
  require_once('login.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="flaticon.css">
  <script src="https://kit.fontawesome.com/d069aff505.js" crossorigin="anonymous"></script>
  <title>JAnDa fit</title>
</head>

<body>
  <section>
    <!-- login de usuarios -->
  <?php
     include('partials/modal_login.php');
   ?>
  <!-- REGISTRO DE USUARIOS -->
  <?php 
      include('partials/registro.php');
    ?>
  </section>
  <!-- acerca de nosotros -->
  <section class="bg-light">
    <?php
    include('partials/acerca_de.php');
  ?>
  </section>

  <!-- Beneficios -->
  <section class="bg-azul" id="beneficios">
    <div class="container">
      <div class="row">
        <div class="col-md 12 col-sm-12 col-lg-6 ">
          <img src="salud.png" class="salud" class="img-fluid" style="" alt="">
        </div>
        <div class="col-md 12 col-sm-12 col-lg-6">
          <h2 class="mt-4 ml-3 mb-3 text-center text-titulo">Beneficios</h2>
          <p class="mb-3 text-muted  text-center text-texto">
            <li>Entrena en el horario que desees.<br><br> </li>
            <li>Videos de entrenamiento con facilidad de descarga.<br><br> </li>
            <li>Tres calendarios de entrenamiento diferente
              (Principiante,Intermedio,Experto).<br><br> </li>
            <li>Al momento de inscribirte tendrás losvideos de
              entrenamiento para realizarlos con quien quieras.<br><br> </li>
            <li>Mejoramiento de estado físico. </li>
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- testimonios -->
  <section class="bg-fondo img-fluid" id="testimonios">
    <div class="container">
      <div class="row">
        <div class="col pl-0 pr-0">

          <h2 class="text-center p-4 text-titulo text-white">Testimonios</h2>
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators" style="
    top: 395px;">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <p class="text-center p-4  text-tamaño  text-white  text-texto">

                  <br>
                  <br>
                  Me pareció que los ejercicios estaban bien explicados, me gustó mucho, puede hacer ejercicio a mi propio ritmo
                  <br>
                  <span class=" text-titulo text-white">-Pedro Muñoz</span>
                </p>
    </div>
    <div class="carousel-item">
      <p class="text-center p-4  text-tamaño  text-white  text-texto">

                  <br>
                  <br>
                  Me encanta que todo sea virtual, ya que nos facilita realizr los entrenamientos en la comodidad de nuestras casas. 
                  <br>
                  <span class=" text-titulo text-white">-Sofia Gonzalez</span>
                </p>
    </div>
    <div class="carousel-item">
      <p class="text-center p-4  text-tamaño  text-white  text-texto">

                  <br>
                  <br>
                  Me gusta la forma como explican y tambien que al ser  virtual puedo realizar los ejercicios en el horarios que yo desee.
                  <br>
                  <span class=" text-titulo text-white">-Daniel Morales</span>
                </p>
    </div>
  </div>

          <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p class="text-center p-4  text-tamaño  text-white  text-texto">

                  <br>
                  <br>
                  Me pareció que los ejercicios estaban bien explicados, me gustó mucho, puede hacer ejercicio a mi propio ritmo
                  <br>
                  <span class=" text-titulo text-white">-Pedro Muñoz</span>
                </p>
                <br>
              </div>
              <div class="carousel-item ">
                <p class="text-center text-white text-tamaño">



                  
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem accusantium maxime laboriosam beatae! Adipisci, alias libero eius in quibusdam deserunt! Delectus ducimus velit cupiditate nam et. Tempora eius quibusdam illo.
                </p>
                <br>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <section class="bg-azul ">
    <div class="contenedor">
      <div class="row">
        <div class="col  height:20%">
          <p>
          <ul class="mt-4  mb-3 text-texto ">
            Medellin-Antioquia<br>
            Telefono: 5216127<br>
            Correo: <a href="link" class="correo">jandafi@gmail.com</a>
          </ul>
          </p>
        </div>
        <div class="col ">

          <ul class="iconos">
            <a href="https://www.facebook.com/JAnDa-fit-113155740545764/?view_public_for=113155740545764" class="fabook" class="fabook"><i class="fab fa-facebook  mb-3 fa-2x fa-lg"></i> </a>

            <a href="https://www.instagram.com/janda_fit/" class="instagram">
              <li class=" fab fa-instagram  ml-3 mb-3 fa-2x fa-lg "></li>
            </a>

          </ul>
        </div>
        <div class="row" style="justify-content: center; text-align: center;">
          <p class="footer text-texto">

            l 2020 Derechos Reservados l JAnDafit

          </p>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>