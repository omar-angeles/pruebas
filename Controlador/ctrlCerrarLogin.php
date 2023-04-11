<?php
    session_start();
    session_destroy();
    header("location: ../Vista/Usuario/LoginEvaluacion.php");
?>