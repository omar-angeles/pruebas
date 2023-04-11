<?php
include ("../../Config/configdb.php");
session_start();
if(!empty($_POST["btnIngresar"])){
    
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidoPaterno"]) and !empty($_POST["apellidoMaterno"]) and !empty($_POST["folio"]) ){
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apellidoPaterno"];
        $apellidoMaterno = $_POST["apellidoMaterno"];
        $folio = $_POST["folio"];
        
        $sql = $conexion->query("select * from ASPIRANTES where nombre='$nombre' and paterno='$apellidoPaterno' and materno = '$apellidoMaterno' and id_folio = '$folio'");

        if($datos=$sql->fetch_object()){
            $_SESSION["id"] = $datos->id;
            $_SESSION["nombre"] = $datos->nombres;
            $_SESSION["apellidoPaterno"] = $datos->apellidxo_paterno;
            $_SESSION["apellidoMaterno"] = $datos->apellido_materno;
            $_SESSION["folio"] = $datos->folio;
            header("location: ../../Vista/Usuario/Evaluaciones.php");

        }else{
            echo "<div class='alert alert-danger'><center><b>Datos incorrectos, verificalos e intenta de nuevo</b></center></div>";


        }
    }else{
        echo"campos vacios";

    }
}


?>