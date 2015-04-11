<?php 
session_start();
$id=$_SESSION['id'];
include 'bd.php';
$con=conectar();

$consulta = 'SELECT * FROM `equipos` AS ret WHERE NUMMIEMBROS<>INTEGRANTES and NOT EXISTS (SELECT * FROM `registro_has_equipos` AS reg WHERE reg.equipos_idequipo = ret.idequipo AND reg.registro_idusuario ='.$id.')';
$resultado = mysqli_query($con,$consulta);
$tab='';

while ($row = mysqli_fetch_array($resultado)) {
	$tab.='<table><tr><td>Nombre:</td><td>'.$row['NOMEQUIPO'].'</td></tr><tr><td>Restricción:</td><td>'.$row['RESTRICCION'].'</td></tr>
	<tr><td>Numero de Miembros:</td><td>'.$row['NUMMIEMBROS'].'</td></tr><tr><td>Numero de Integrantes:</td><td>'.$row['INTEGRANTES'].'</td></tr>
	<tr><td>Acerca de:</td><td>'.$row['ACERCA'].'</td></tr><tr><td colspan=2><center><button class="button" onclick="envia('.$row['IDEQUIPO'].')">Enviar Solicitud</button></center></td></tr></table>';
}
 
echo $tab;
 ?>