<?php  
session_start();
$id=$_GET['id'];
include 'bd.php';
$con=conectar();

$consulta = "SELECT * FROM `retos` AS ret INNER JOIN `equipos_has_retos` AS reg ON ret.idreto = reg.retos_idreto WHERE reg.equipos_idequipo =$id";
$resultado = mysqli_query($con,$consulta);
$tab='<center><h3>Retos del Grupo</h3><br>';

while ($row = mysqli_fetch_array($resultado)) {
	$tab.='<table>
	<tr><td>Nombre:</td><td>'.$row['NOMBRERETO'].'</td></tr>
	<tr><td>Descripcion:</td><td>'.$row['DESCRIPCIONRETO'].'</td></tr>
	<tr><td>Distancia:</td><td>'.$row['DIST'].'</td></tr>
	<tr><td>Pasos Hechos:</td><td>'.$row['PASOSHECHOS'].'</td></tr>
	<tr><td>Km Hechos:</td><td>'.$row['KMHECHOS'].'</td></tr>
	</table>';
}
 
echo $tab."</center>";
 ?>