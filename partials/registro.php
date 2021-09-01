<div class="container bg-bn1">
      <div class="row " >
        <div class="col " style="height:550px;">
         
          <!-- Button trigger modal -->


          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary text-titulo" style="color: black;" data-toggle="modal" data-target="#Modal">
            Registrate Ya
          </button>

          <!-- Modal -->
          <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-titulo" id="ModalLabel">Registro</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <form action="" method="post">

                    <div class="form group text-texto">
                      <label for="InputNombre">Nombre Completo</label>
                      <input type="text" class="form-control" id="InputNombre" name="nombre_completo">
                    </div>
                    <div class="form group text-texto">
                      <label for="InputCorreo ">Correo Electronico</label>
                      <input type="email" class="form-control" id="InputCorreo" aria-describedby="emailHelp" name="email">


                    </div>
                    <div class="form group text-texto">
                      <label>Contraseña</label>
                      <input type="password" name="contrasena" class="form-control">


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="envio">Enviar</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>

    </div>