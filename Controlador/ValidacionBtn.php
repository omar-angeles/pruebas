<?php
include '../../Config/conexion.php';

$folio = $_SESSION["folio"];

$objeto = new Conexion("localhost","root","","prueba");
                     
$objeto->conectarBD();
    
$sql="SELECT F.estatus FROM examenes E,fechas_examen F WHERE F.id_aspirante = $folio AND E.id_examen = F.id_examen AND E.id_tipo = '1'"; 	                
$resultado = $objeto->ejecutarQuery($sql);

$resultado=mysqli_fetch_array($resultado);

$realizado = $resultado[0];
$objeto ->cerrarBD();


function texto1(){  
    
    $txt= "";
if($GLOBALS['realizado'] == 1){
    $txt= "<p>Evaluación sin realizar.</p>
    </div>
    <div id='btnExam' class='btn1'>
      <p><a onclick='boton1()'>Realizar</a></p>
    </div>";
}else{
    $txt= "<p id='EvaRea'>Evaluación realizada.</p> 
    </div>
    <div id='btnExam' class='btn2'>
      <p><a onclick='boton1()'>No disponible</a></p>
    </div>";
}
return $txt;
}

function accionbtn1(){
    if($GLOBALS['realizado'] == 1){
        $accion= "window.location.href = '../../Vista/Usuario/Examen.php';";
    }else{
        $accion="Swal.fire({
            title: 'El examen de conocimiento ya ha sido realizado.',
            icon: 'question',
            iconHtml: '!',
            
          });"; 
    }  
return $accion;
}

function texto2(){  
    $txt2= "";
if($GLOBALS['realizado'] == 0){
    $txt2= "<p id='EvaRea'>El examen de conocimiento ya ha sido realizado.</p>
    </div>
    <div id='btnExam2' class='btn1'>
      <p><a onclick='boton2()'>Realizar</a></p>
    </div>";
}else{
    $txt2= "<p>Realizar primero el examen de conocimiento.</p>
    </div>
    <div id='btnExam2' class='btn2'>
      <p><a onclick='boton2()'>No disponible</a></p>
    </div>";
}
return $txt2;
}

function accionbtn2(){
    if($GLOBALS['realizado'] == 0){
        $accion2= "window.location.href = '../../Vista/Usuario/Evaluaciones.php';";
    }else{
        $accion2="Swal.fire({
            title: 'No has realizado el examen de conocimiento.',
            icon: 'question',
            iconHtml: '!',
            
          });"; 
    }  
return $accion2;
}


?>
