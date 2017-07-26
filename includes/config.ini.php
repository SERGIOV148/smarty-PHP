<?php

 $conexion=new mysqli("mysql.mysqlnet","svera","8PyY2rD4cE4RY9jTmzl4r8yso.XK","pruebas");
   if ($conexion->connect_error) {
      echo "fallo al conectarse (".$mysqli->connect_error.")".$mysqli->connect_error;
   }

include("libs/smarty.class.php");
$smarty=new smarty(); 



 ?>