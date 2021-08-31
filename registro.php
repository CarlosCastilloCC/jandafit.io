<?php 
 include('cxn.php');
 session_start();
 if (isset($_POST['envio'])) {
   $nombre_completo = $_POST['nombre_completo'];
   $email = $_POST['email'];
   $contrasena = $_POST['contrasena'];
   $contrasena = hash('md5', $contrasena);
 
   $query = $cxn->prepare("SELECT * FROM registro WHERE email=:email");
   $query->bindParam("email", $correo, PDO::PARAM_STR);
   $query->execute();
 
   if ($query->rowCount() > 0) {
     echo '<p class = "error">Este correo ya está registrado</p>';
   }
 
   if ($query->rowCount() == 0) {
     $query = $cxn->prepare("INSERT INTO registro (NOMBRE_COMPLETO, EMAIL, CONTRASENA) VALUES (:nombre_completo, :email, :contrasena)");
 
     $query->bindParam("nombre_completo", $nombre_completo, PDO::PARAM_STR);
     $query->bindParam("email", $email, PDO::PARAM_STR);
     $query->bindParam("contrasena", $contrasena, PDO::PARAM_STR);
 
 
     $result = $query->execute();
 
     if ($result) {
 
       echo '<p class = "sucess">registro exitoso</p>';
     } else {
       echo '<p class = "sucess">Algo salió mal</p>';
     }
   }
 }
