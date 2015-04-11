<?php
date_default_timezone_set('America/Mexico_City');
$fecha = date("Y-m-d");
$feA = explode("-",$fecha);
$dia=array();

$x = date("d",mktime(0,0,0,$_GET['mes']+1,0,$feA[0]));

for($i=01;$i<$x+1;$i++)
	$dia[] = $i;

 echo json_encode($dia);
/* Preparo la respuesta que se va a regresar como JSON*/

?>
