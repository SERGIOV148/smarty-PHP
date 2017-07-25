<?php

 $conexion=new mysqli("localhost","root","","prueba3");
   if ($conexion->connect_error) {
      echo "fallo al conectarse (".$mysqli->connect_error.")".$mysqli->connect_error;
   }

include("libs/smarty.class.php");
$smarty=new smarty(); 



 ?>