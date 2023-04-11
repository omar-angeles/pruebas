<?php
     class Conexion{
         private $dbhost;
         private $usuario;
         private $password;
         private $dbname;
         private $conn;

         /* metodo constructor*/

        public function __construct($servidor, $usuario, $password, $dbname){
            $this->dbhost = $servidor;
            $this->usuario = $usuario;
            $this->password = $password;
            $this->dbname = $dbname;     
        }

        /* Obtener conexion */
  
         public function conectarBD(){
            $this->conn = mysqli_connect($this->dbhost, $this->usuario, $this->password, $this->dbname);
            //Verificar conexion
            if(!$this->conn){
                die ("<br>error en la conexion a la base de datos: ".mysqli_connect_error());
            }else{
               // echo "<br>La conexion a la base de datos ha sido exitosa";
            }
         }
         //Metodo para una operacion

         public function ejecutarQuery($sql){
           return mysqli_query($this->conn,$sql);
         }
         
         //Cerrar conexion
         public function cerrarBD(){
             mysqli_close($this->conn);
         }
     }
?>