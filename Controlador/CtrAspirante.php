
<?php
//include 'Config/conexion.php';


class CtrAspirante{
    function fechasExamenes(){

        $conn = mysqli_connect("localhost","root","Aljjyglc_123","examen_conocimientos2");
                
        $sql="SELECT * FROM fechas_examen"; 	                
        $resultado = mysqli_query($conn,$sql);
        
        while ($reg=mysqli_fetch_array($resultado)){
            echo'
            <tr>
                <td>'.$reg[0].' </td>
                <td>'.$reg[3].' </td>
                <td>'.$reg[4].' </td>
                <td>'.$reg[5].' </td>
                <td>'.$reg[6].' </td>
                <td>'.$reg[7].' </td>
            </tr>';
        }
        
        mysqli_close($conn);
        return;
    }

    function DisponibilidadExamen($idAspirante){
        $conn = mysqli_connect("localhost","root","Aljjyglc_123","examen_conocimientos2");
                
        $sql="SELECT * FROM fechas_examen
                where id_aspirante = '$idAspirante'"; 	                
        $resultado = mysqli_query($conn,$sql);


        
        while ($reg=mysqli_fetch_array($resultado) ){
            if ($reg[6] == 1){
                $horainicio=$reg[4];
                $horafin =$reg[5];  
                $aspirante = new CtrAspirante;
                echo'
                <div style="padding: 0% 15%">
                <form action="/CtrExamen.php"></form>
                    <center> <br>                   
                        <h3 style="color:Red;"> ¡Instrucciones antes de inciar tu examen!</h3>
                    </center>
                            <h5 style="text-align: justify;text-justify: inter-word;">
                                - Solo tienes 1 oportunidad para realizarlo
                                <br>
                                - El examen de conocimientos tiene una duración de 45:00 minutos                         
                                <br>                            
                                - Favor de evitar distracciones y de asegurar que solo realizaras esta evaluación
                                <br>                            
                                - Esta prohibido realizar busquedas en la web 
                                <br>                            
                                - Si se te sorprende realizando algun tipo de trampa se cancelara tu proceso de selección                                
                            </h5>
                            <form method="POST" action="Conocimientos.php">                                              
                        <br>                        
                        <center>
                            <input type="checkbox" id="terminos" name="terminos" value="terminos">
                            <label name="terminos" for="terminos">Acepto haber leído los terminos y condiciones acerca de las evaluaciones</label><br>
                            <br>                           
                            <button class="btn btn-warning" name="iniciar" type="submit" value="iniciar">Iniciar Evaluación</button>                            
                          
                        </center>
                        </form>  
                        <br>
                </div>
                ';
                
                
            }else{
                echo '<script language="javascript">
                alert("Aún no tienes habilitado el examen");
                window.history.go(-1)</script>';
            }
            return;
        }

    }

    function cambiarestatus($idAspirante){

        echo'id aspirante: '.$idAspirante ;
        include_once '../Modelo/fechasexam.php';
        //sentencia sql
        $sql = "SELECT * FROM fechas_examen where id_aspirante = '$idAspirante'";
        //imprimir la sentencia sql
           
        //crear instancia de la clase conexion
        $conn = mysqli_connect("localhost","root","Aljjyglc_123","examen_conocimientos2");
                     
        //establecer conexion a la bd
        
        $resultado = mysqli_query($conn,$sql);
        
        //ejecutar sentencia sql
        
        if(mysqli_num_rows($resultado) > 0){
            //definiendo un array
            $arreglo = array();
            //obtener el registro de todos los campos
            $arreglo = mysqli_fetch_array($resultado);
            //crear objeto tipo usuario
            $usuario = new fechasExam();
            //formar objeto
            
            $usuario->setEstatus($arreglo[6]);
            
            
            
            //Cerrar conexion
            //Regreso de objeto
            return $usuario;
        }else{
            //cerrar conexion a la bd
            return null;

        }
    }

    function listarPreguntas(){
        $conn = mysqli_connect("localhost","root","Aljjyglc_123","examen_conocimientos2");
            $sql="SELECT *
                FROM preguntas 
                ORDER BY RAND() 
                LIMIT 20 ";
            $resultado = mysqli_query($conn,$sql);
            //Contador de preguntas
            $i =1; $res =0;

            while ($reg=mysqli_fetch_array($resultado)){
                echo'
                <div class="radio">
                    <h2>'.$i++.'.- '.$reg['pregunta'].'</h2>';
                    
                    $id_pregunta1 = $reg['id_pregunta'];

                    $sql2="SELECT *
                    FROM respuestas 
                    where id_pregunta = '$id_pregunta1'";

                $resultado2 = mysqli_query($conn,$sql2);
    
                while ($reg2=mysqli_fetch_array($resultado2)){
                    echo'
                        
                        <input type="radio" name="'.$id_pregunta1.'" id="res'.$res.'" value="'.$reg2['correcta'].'">
                        <label for="res'.$res.'">'.$reg2['respuesta'].'</label><br>';
                        $res++;     
                    }   
                echo'</div>';
                     
               
            }
            mysqli_close($conn);
    }

    function activarReloj(){
  
        echo '   
        <!--inicio botones flotantes-->
        <a class="btn-flotante-tiempo">
            Tiempo:
            <span id="horas"></span>
            <span id="minutos"></span>
            <span id="segundos"></span>
        </a>  
        
        <!--
        <a  type="Submit" value="Finalizar" onclick="alertaFinalizar()" class="btn-flotante-Finalizar">Finalizar</a> 
        -->
        <input type="Submit" name="Finalizar" id="Finalizar"  value="Finalizar" class="btn-flotante-Finalizar">Finalizar</input> 
       
        <!--Fin botones flotantes-->'; 
    }

    function resultadosExamenes(){

        $conn = mysqli_connect("localhost","root","Aljjyglc_123","examen_conocimientos2");
                
        $sql="SELECT * FROM respuestas_aspirante"; 	                
        $resultado = mysqli_query($conn,$sql);
        
        while ($reg=mysqli_fetch_array($resultado)){
            echo'
            <tr>
                <td>'.$reg[1].' </td>
                <td>'.$reg[2].' </td>
                <td>'.$reg[6].' </td>
                <td>'.$reg[7].' </td>
                <td>'.$reg[8].' </td>
            </tr>';            
        }

        mysqli_close($conn);
            return;
    }
}