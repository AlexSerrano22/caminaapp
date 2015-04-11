<?php 
session_start();
$US = $_POST['user'];
$PASS = $_POST['pass'];
$con=mysqli_connect("localhost","observatorio","(@ImagInacIon@)","observatorio");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"SET NAMES 'utf8'");

$result = mysqli_query($con,"SELECT * FROM `registro` WHERE contraseña =Password('".$PASS."') and `NOMBREUSUARIO`='".$US."'");

$num=mysqli_num_rows($result);
if($num == 1){
while($row = mysqli_fetch_array($result))
  {

    $query=mysqlI_query($con,"SELECT * from retosregistrados where   REGISTRO_IDUSUARIO = '".$row['IDUSUARIO']."' and RETOS_IDRETO>11 and RETOS_IDRETO<17");
    echo $nums=mysqli_num_rows($query);
    if($nums<1){
    	$PAG="../rapa.php";
    }else{
      $_SESSION['rapa']=1;
    	$PAG="../camina.html";
    }

  $_SESSION['autenticado'] = $row['IDUSUARIO'];
  $_SESSION['id'] = $row['IDUSUARIO'];
  $_SESSION['user'] = $row['NOMBREUSUARIO'];
  }
}else{
  $PAG="../index.html";
}
mysqli_close($con);


header("Location: ".$PAG);
?>
