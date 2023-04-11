<?php
session_start();
if (empty($_SESSION["folio"])) {
    header("location: ../Usuario/LoginEvaluacion.php");
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
  <link rel="stylesheet" href="../../css/examen.css">
  <title>IT O | Inicio </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../Usuario/Evaluaciones.php"><img src="../../img/LogoITO.png" style="width:4rem;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="../Usuario/Evaluaciones.php">Evaluaciones</a>
          <a class="nav-link" href="../Usuario/Examen.php">Examen</a>
          <a class="nav-link" href="../Admin/RankingAspirantes.php">Ranking</a>
        </div>
      </div>
      <div id="sessionNombre">
          <b>
          <a class="alert alert-primary" >
            <?php
              echo $_SESSION["nombre"] . " " . $_SESSION["apellidoPaterno"];
            ?>
          </a>
          </b>
        </div>
        <div id="sessionNombre">
          <b>
          <a class="alert alert-danger" href="../../Controlador/ctrlCerrarLogin.php">
            Cerrar Sesión
          </a>
          </b>
        </div>
    </div>
  </nav>
  <div class="container">
    <main>
      <br><br>
      <section class="vh-100">
        <div class="table-responsive">
          <div class="table-bordered">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Porcentaje Examen</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>98%</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>95%</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Brandond</td>
                  <td>the Bird</td>
                  <td>93%</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Osvaldo</td>
                  <td>the poll</td>
                  <td>92%</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Galicia</td>
                  <td>the Bird</td>
                  <td>91%</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Octavio</td>
                  <td>the Bird</td>
                  <td>90%</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Jorge</td>
                  <td>the Bird</td>
                  <td>89%</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Mario</td>
                  <td>the Bird</td>
                  <td>88%</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Gustavo</td>
                  <td>the Bird</td>
                  <td>87%</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Jair</td>
                  <td>the Bird</td>
                  <td>86%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
  </div>
  </div>
  </section>
  </main>
  </div>

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>