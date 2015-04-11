<?php
session_start();
$id=$_SESSION['id'];
include 'bd.php';
$con=conectar();
date_default_timezone_set('America/Mexico_City');
$fechas = date("Y-m-d");
$feA = explode("-",$fechas);
$dia=array();

$x = date("d",mktime(0,0,0,$_GET['mes']+1,0,$feA[0]));

$result = mysqli_query($con,"SELECT FECHREGISTROMETA, sum(NUMERODEPASOS) as NUMERODEPASOS FROM `metasactividafisica` WHERE month(`FECHREGISTROMETA`) = '".$_GET['mes']."' and REGISTRO_IDUSUARIO = $id group by FECHREGISTROMETA");


for($i=01;$i<=$x+1;$i++)
	$dia[] = 0;


while($row = mysqli_fetch_array($result))
  {	
 	$fecha = explode("-", $row['FECHREGISTROMETA']);
 	$dia[intval($fecha[2])-1] = intval($row['NUMERODEPASOS']);
 	  
 }
  


mysqli_close($con);



 echo json_encode( array($dia));
/* Preparo la respuesta que se va a regresar como JSON*/

?>