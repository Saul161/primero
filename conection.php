<?php
class Conection{

         public $Conection;

          function __construct(){
          	$this->con=mysqlI_connect('localhost','root','','primero');

          }
}

?>