<?php
require_once('Conection.php');
class Usuarios extends Conection{
           
           function listar_usuarios(){
          	$resultado=$this->con->query("SELECT * FROM usuarios" );
          	return $resultado->fetch_all(MYSQLI_ASSOC);//
            }


} 
$usuarios=new usuarios();
print_r($usuarios->listar_usuarios() );

?>