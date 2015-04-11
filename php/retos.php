<?php 
session_start();
$id=$_SESSION['id'];
include 'bd.php';
$con=conectar();

$consulta = 'SELECT * FROM `retos` AS ret WHERE NOT EXISTS (SELECT * FROM `retosregistrados` AS reg WHERE reg.retos_idreto = ret.idreto AND reg.registro_idusuario ='.$id.') and TIPORETO = "individual" AND VALIDA=1';
$resultado = mysqli_query($con,$consulta);
$tab='';

while ($row = mysqli_fetch_array($resultado)) {
	$tab.='<table><tr><td>Nombre:</td><td>'.$row['NOMBRERETO'].'</td></tr><tr><td>Descripción:</td><td>'.$row['DESCRIPCIONRETO'].'</td></tr>
	<tr><td>Distancia:</td><td>'.$row['DIST'].' km</td></tr><tr><td>Premio:</td><td>'.$row['PREMIO'].'</td></tr>
	<tr><td>Restriccion:</td><td>'.$row['REST'].'</td></tr><tr><td colspan=2><center><button class="button" onclick="unir('.$row['IDRETO'].')">Unirse</button></center></td></tr></table>';
}
 
echo $tab;
 ?>