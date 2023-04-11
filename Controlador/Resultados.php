<?php
session_start();
if (empty($_SESSION["folio"])) {
    header("location: LoginEvaluacion.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/examen.css">
    <link rel="stylesheet" href="../css/styleEvs.css">
    <title>IT O | Resultados </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Vista/Usuario/Evaluaciones.php"><img src="../img/LogoITO.png" style="width:4rem;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="../Vista/Usuario/Evaluaciones.php">Evaluaciones</a>
            <a class="nav-link" href="../Vista/Usuario/Examen.php">Examen</a>
            <a class="nav-link" href="../Vista/Admin/RankingAspirantes.php">Ranking</a>
        </div>
        </div>
            <div id="sessionNombre">
                <b>
                    <p class="alert alert-primary">
                        <?php
                        echo $_SESSION["nombre"] . " " . $_SESSION["apellidoPaterno"];
                        ?>
                    </p>
                    
                </b>
            </div>
            <a class="alert alert-danger" href="../../Controlador/ctrlCerrarLogin.php">
                        Cerrar Sesión
                    </a>
        </div>
    </nav>
    <div class="wrap" ><br><br>

    <?php
        echo '<script language="javascript">
                alert("Estas apunto de terminar tu examen");
                
            </script>'; 
        if(isset($_POST['Finalizar'])){

            //require 'CtrAspirante.php';
            //$idAspirante = $_SESSION["folio"];
            //$resultados = new CtrAspirante;
            //$resultados ->cambiarestatus($idAspirante);

            echo'
            <form class="formulario" action="" style="background-color:white; border-radius:5px ; box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.367);" >
                <div class="info">
                <h1>Evaluación realizada</h1>
                </div>
                <div>
                    <center>
                    <a href="../Vista/Usuario/Evaluaciones.php"><img style="width:100%;" src="../img/Gracias.png"></a>
                    </center>
                </div>
            </form>               
            ';
            
            
        }else{
        
        echo '<script language="javascript">
                alert("No has terminado tu examen");
                window.history.go(-1)
            </script>';            
        }
    ?>
     
    </div>
    <br><br><br>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Recuerda que el modulo de evaluaciones debe contestarse de manera honesta, cualquier indicio de trampa sera motivo de cancelación
                </p>
            </section>
            <!-- Section: Text -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            IT Outsoursing© 2022 Copyright
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timecircles/1.5.3/TimeCircles.min.js" integrity="sha512-FofOhk0jW4BYQ6CFM9iJutqL2qLk6hjZ9YrS2/OnkqkD5V4HFnhTNIFSAhzP3x//AD5OzVMO8dayImv06fq0jA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/main.js"> </script>
<script src="../js/sweetalert.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>
