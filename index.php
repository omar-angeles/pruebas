<?php
session_start();
if (empty($_SESSION["folio"])) {
    header("location: Vista/Usuario/LoginEvaluacion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styleEvs.css">
    <title>IT O | Inicio </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/LogoITO.png" style="width:4rem;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="Vista/Usuario/LoginEvaluacion.php">Login Evaluación</a>
            <a class="nav-link" href="Vista/Usuario/Evaluaciones.php">Evaluaciones</a>
            <a class="nav-link" href="Vista/Usuario/Examen.php">Examen</a>
            <a class="nav-link" href="Vista/Admin/RankingAspirantes.php">Ranking</a>
        </div>
        </div>
    </div>
    </nav>
    <main>
    <br><br><br>
        <section class="vh-100" style=" padding: 5% 10%;"  >
            
            <h1 style="color: white; ">Fechas de examen</h1>
            <div style="background-color: white; padding: 20px;">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th >Id Aspirante</th>
                            <th>Fecha</th>
                            <th>Hora Inicio</th>
                            <th>Hora Fin</th>
                            <th>Estatus</th>
                            <th>Fecha y hora</th>
                        </tr>
                    </thead>
                <?php
                
                require 'Controlador/CtrAspirante.php';
                    $aspirante = new CtrAspirante;

                    $aspirante ->fechasExamenes();
                ?>
                
                </table>
            </div>
                <br><br><br>

                <h1 style="color: white; ">Resultados Examenes</h1>
            <div style="background-color: white; padding: 20px;">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id Aspirante</th>
                            <th>Id Examen</th>
                            <th>aciertos</th>
                            <th>Estatus</th>
                            <th>Fecha y hora</th>
                        </tr>
                    </thead>
                <?php                
                
                    $aspirante = new CtrAspirante;
                    $aspirante ->resultadosExamenes();
                ?>

                </table>
            </div>
            <br><br><br>
            
        </section>
    </main>
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Text -->
    <section class="mb-4">
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>