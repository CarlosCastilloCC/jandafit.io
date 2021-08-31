<?php 
session_start();
include('cxn.php');
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('md5', $contrasena);

    $query = $cxn->prepare("SELECT * FROM registro WHERE EMAIL=:email AND CONTRASENA=:contrasena");
    $query ->bindParam("email",$email,PDO::PARAM_STR);
    $query ->bindParam("contrasena",$contrasena,PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    /*var_dump([$email,$contrasena]);
    die();*/

    if(!$result || !count($result)){
        echo '<p class="error"> usuario y contraseña no coinciden </P>';
    }else{
        $_SESSION['user'] = $result;
        header("Location: ".PAGE_ROOT."/paginaInicio.php");
    }

    






