<?php 
session_start();
$id=$_SESSION['id'];
include 'bd.php';
$con=conectar();

$idequipo = $_GET['equipo'];

$query = "INSERT INTO `notificaciones`(`REGISTRO_IDUSUARIO`, `EQUIPOS_IDEQUIPO`,`ESPERA`) VALUES ('$id','$idequipo','1')";

if(mysqli_query($con,$query)){
	echo 'Solicitud Enviada';
}else{
	echo 'Error, Intenta de nuevo';
}


