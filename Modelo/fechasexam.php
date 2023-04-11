<?php
class fechasExam{
    private $id_aspirante;
    private $id_fechaexamen;
    private $id_examen;
    private $fecha;
    private $hora_inicio;
    private $hora_fin;
    private $estatus;
    private $fehca_hora;

    public function __construct( $id_aspirante, $id_fechaexamen, $id_examen,$fecha,$hora_inicio,$hora_fin,$estatus,$fehca_hora){
        $this-> id_aspirante = $id_aspirante;
        $this-> id_fechaexamen = $id_fechaexamen;
        $this-> id_examen =$id_examen;
        $this-> fecha = $fecha;
        $this-> hora_inicio = $hora_inicio;
        $this-> hora_fin = $hora_fin;
        $this-> estatus = $estatus;
        $this-> fehca_hora = $fehca_hora;
    
        }

        
        public function getIdFechaExamen(){
            return $this->$id_fechaexamen;
        }
        public function setIdFechaExamen($id_fechaexamen){
            $this->id_fechaexamen= $id_fechaexamen;
        }

        public function getIdAspirante(){
            return $this->$id_aspirante;
        }
        public function set($id_aspirante){
            $this->id_aspirante= $id_aspirante;
        }

    public function getEstatus(){
        return $this->$estatus;
    }
    public function setEstatus($estatus){
        $this->estatus= $estatus;
    }


}
?>