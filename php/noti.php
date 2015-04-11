<?php
session_start();
$id = $_SESSION['id'];
include 'bd.php';
$con = conectar();

$query = "SELECT * FROM retosregistrados as reg  INNER JOIN retos as re ON re.idreto = reg.retos_idreto where `REGISTRO_IDUSUARIO` = $id AND ESTATUSRETO = 'Terminado'";

$result = mysqli_query($con, $query);
$success='<br>';
while($row = mysqli_fetch_array($result)){
	$success.= '<div data-alert class="alert-box success radius">Has terminado el reto: '.$row['NOMBRERETO'].'</div>';
}
echo $success;