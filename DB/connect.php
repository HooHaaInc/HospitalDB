<?php


function dbConnect (){

    //  Conecta con el servidor mysql
  $link = mysqli_connect("localhost","root","","clinica");
  if(!$link) {

    // Si no  conecta, muestra un error y termina la ejecucion
    die('No  se pudo conectar con la base de datos:' . mysql_error());
 }

 
return $link;
}
?> 