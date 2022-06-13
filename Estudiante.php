<?php
require_once('Conection.php');
class Estudiante extends Conection{
           
           function listar_estudiante(){
          	$resultado=$this->con->query("SELECT * FROM estudiante" );
          	return $resultado->fetch_all(MYSQLI_ASSOC);//
            }


} 
$estudiante=new estudiante();
print_r($estudiante->listar_estudiante() );

?>