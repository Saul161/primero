<?php
class Operaciones
{
    public $n1;
    public $n2;
    public $resultado;
   function __construct(){
       $this->n1=10;
       $this->n2=25;
   }
    function sumar(){
    	return $this->resultado=$this->n1=$this->n2;
   }
}
$Operacion=new Operaciones();
echo $Operacion->sumar();
?>