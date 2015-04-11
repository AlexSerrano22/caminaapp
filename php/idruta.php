<?php 
session_start();
$id=$_SESSION['id'];
include 'bd.php';
$con=conectar();
$salida='<BR>
<div class="pagination-centered">
  <ul class="pagination">
    <li class="arrow unavailable"><a href="">&laquo;</a></li>';
     
	$consulta = 'SELECT * FROM rutas';
	$resultado = mysqli_query($con,$consulta);
	while ($row = mysqli_fetch_array($resultado)) {
		$salida.="<li onclick='idrutas($row[idRUTAS])'><a>$row[NOMBRE]</a></li>";
	}
$salida.='<li class="arrow"><a href="">&raquo;</a></li>
  </ul>
</div>'; 

mysqli_query($con,"SET NAMES 'UTF8'");
if($_GET['id']>0){
	$consulta = 'SELECT * FROM rutas WHERE idRUTAS = '.$_GET['id'];
	$resultado = mysqli_query($con,$consulta);
	$row = mysqli_fetch_array($resultado);

	$salida.="<center><table>
	<tr><td>Descripción:</td><td>".$row['DESCRIPCION']."</td></tr>
	<tr><td>Distancia:</td><td>$row[DISTANCIA]</td></tr>
	<tr><td>Pasos:</td><td>$row[PASOS]</td></tr>
	</table>";

	$salida.= '<iframe src="'.$row['URLGOOGLE'].'"  id="maps" name="mapas" width="80%" ></iframe></center>';

	
}
	echo $salida;

?>