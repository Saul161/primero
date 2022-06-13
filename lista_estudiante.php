<?php
require_once('estudiante.php')
$estudiante=new estudiante();
$consulta=$estudiante->listar_estudiante();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lista_estudiante</title>
	<style>
		  th{
		  	padding:5px;
		  }
		  th{

		  }
		  table{
                  width: 80%;
                  border-collapse:collapse;
		  }
		  a{
		  	background:#DB9065;
		 	color:white;
		 	border:solid 1px #595050;
		 	text-decoration:none;
		    font-family:cursiva;
		    text-align:center;
		    padding:5px;
		    border-radius:5px;

		  }
		  img{
		  	width:15px;
		  }
	</style>
</head>
<body>
	<h1 style="background:#55AC74;text-align:center;color:while;">LISTA ESTUDIANTES</h1>

	<table border="5",align="center">
		    <tr>
		    	<th>$</th>
			         <th>NOMBRES</th>
			         <th>APELLIDOS</th>
			         <th>CEDULA</th>
			         <th>EDAD</th>
			         <th>CUIDAD</th>
			         <th>GENERO</th>
			         <th>ACCIONES</th>


		    </tr>
		    

		  <style>
		  	th{
		    	text-align:center;
		    }
		  </style> 

          <?php
          $x=0;
          foreach($consulta as $c){
          	  $x++;
          	echo "<tr>
                         <td>$x</td>
                         <td>{$c['est_nombres']}</td>
                         <td>{$c['est_apellido']}</td>
                         <td>{$c['est_cedula']}</td>
                         <td>{$c['est_edad']}</td>
                         <td>{$c['est_ciudad']}</td>
                         <td>{$c['est_genero']}</td>
                         <td>
                              <a href=''>
                                  <img src='lencil.png'
                              </a>
                              <a href=''>
                                   <img src='del.png'
                              >/<a>
                         </td>
          	      </tr>";

          }
          ?>
	
	</table>
</body>
</html>