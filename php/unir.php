<?php 
session_start();
$id=$_SESSION['id'];
include 'bd.php';
$con=conectar();
// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
 date_default_timezone_set('America/Los_Angeles');
 //Imprimimos la fecha actual dandole un formato
 $fecha=date("Y-m-d");
$idreto= $_GET['reto'];

$query = " INSERT INTO `retosregistrados`(`REGISTRO_IDUSUARIO`, `RETOS_IDRETO`,`FECHAREGISTRO`,`PASOSHECHOS`, `KMHECHOS`,`FECHAACTUALIZACION`,`ESTATUSRETO`) VALUES ('$id','$idreto','$fecha','0','0','$fecha','Activo')";
if(mysqli_query($con,$query)){
	echo "A comenzado el reto";
}else{
	echo "Hubo un error, Intente de nuevo";
}
