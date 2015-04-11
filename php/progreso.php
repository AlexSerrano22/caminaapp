<?php
session_start();
  $user = $_SESSION['user'];
  $id = $_SESSION['id'];
 $con=mysqli_connect("localhost","observatorio","(@ImagInacIon@)","observatorio");


 $sentencia="SELECT DIAS_SEGUIDOS, RETOS_IDRETO FROM `retosregistrados` WHERE `RETOS_IDRETO`>11 and `RETOS_IDRETO`<17 and `ESTATUSRETO`='Activo' and `REGISTRO_IDUSUARIO` = ".$id;
      
 $result=mysqli_query($con,$sentencia);
 $row = mysqli_fetch_array($result);
 if($row!=null){
 $x = $row['DIAS_SEGUIDOS'] * 20;

 switch ($row['RETOS_IDRETO']) {
 	case '12':
 		$reto = 'Primer Reto camina 5,000 pasos';
 		break;
 	case '13':
 		$reto = 'Baja Actividad camina 7.500 pasos';
 		break;
 	case '14':
 		$reto = 'Actividad Regular camina 10,000 pasos';
 		break;
 	case '15':
 		$reto = 'Buena Actividad camina 12,000 pasos';
 		break;
 	case '16':
 		$reto = 'Muy Buena Actividad camina 12,500 pasos';
 		break;
 	
 }

 echo '<div class="javascript chart" id="cir" data-percent="'.$x.'">
              <span class="percent"></span>
              <p>Progreso de reto</p>
              <p>Tu Reto Actual es:'.$reto.' diarios</p>
              <p></p>
          </div>';
      }