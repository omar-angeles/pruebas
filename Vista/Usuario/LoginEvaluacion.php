<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/styleEvs.css">
    <title>IT O | Login evaluacion de conocimientos </title>
</head>
<script>
function myFunction() {
    Swal.fire({
    title: 'Comunicate con soporte para solución a tu problema',
    icon: 'question',
    iconHtml: '?',
    
});
}
</script>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="LoginEvaluacion.php"><img src="../../img/LogoITO.png" style="width:4rem;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="nav-link active" aria-current="page" href="LoginEvaluacion.php">Login Evaluación</a> -->
                    <a class="nav-link" href="Evaluaciones.php">Evaluaciones</a>
                    <a class="nav-link" href="Examen.php">Examen</a>
                    <a class="nav-link" href="../Admin/RankingAspirantes.php">Ranking</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <br><br><br>
        <section class="vh-100">
            <div class="container-fluid h-custom" >
                <div class="row d-flex justify-content-center align-items-center h-100">

                    <div class="col-md-5 col-lg-6 col-xl-7 offset-xl-0" style="background-color: white;" id="contenedorP">
                        <form action="" method="POST">
                        <!-- <form action="../Usuario/Evaluaciones.php" method="post"> -->
                            <center><br>
                                <img src="../../img/LogoITO2.png" style="width: 15rem;">
                                <br><br>
                            </center>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <center>
                                <H2> Evaluaciones</H2>
                                </center>
                                
                                <p class="text-center fw-bold  mb-0">Ingrese los siguientes datos</p><br>
                                <?php include "../../Controlador/ctrlLogin.php";
                                include ("../../Config/configdb.php");
                                ?>
                                <p><input type="text" id="nombre" name="nombre" class="form-control form-control-lg" placeholder="Ingresa tu nombre" required  /></p>

                                <p><input type="text" id="apellidoPaterno" name="apellidoPaterno" class="form-control form-control-lg"  placeholder="Ingresa tu apellido paterno"  required /></p>

                                <p><input type="text" id="apellidoMaterno" name="apellidoMaterno" class="form-control form-control-lg" placeholder="Ingresa tu apellido materno"  required /></p>

                                <p><input type="text" id="folio" name="folio" class="form-control form-control-lg" placeholder="Ingresa tu folio" required /></p>

                            </div>

                            <div class="d-flex justify-content-between align-items-center">                                
                                <a onclick="myFunction()"class="text-body">¿No tienes Folio?</a>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                
                                <p><input name="btnIngresar" class="btn btn-primary btn-lg " type="submit" value="Ingresar" style="padding-left: 2.5rem; padding-right: 2.5rem;"><br></p>

                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </main>
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

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            IT Outsoursing© 2022 Copyright
        </div>
    </footer>
    <!-- Footer -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
