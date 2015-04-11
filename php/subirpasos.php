<?php session_start();
$id = $_SESSION['id'];
     //include 'BD.php';
$con=mysqli_connect("localhost","observatorio","(@ImagInacIon@)","observatorio");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$paso = $_GET['pasos'];
$dist = $_GET['dist'];
$fecha = $_GET['fecha']; 

$query = "INSERT INTO `metasactividafisica`(`NUMERODEPASOS`, `KILOMETROS`, `FECHREGISTROMETA`, `REGISTRO_IDUSUARIO`) VALUES ('$paso','$dist','$fecha','$id')";

if(mysqli_query($con,$query)){
	echo "Pasos almacenados";
}else{
	echo "Error, Intente de nuevo";
}


$query = "UPDATE retosregistrados SET FECHAACTUALIZACION='$fecha', PASOSHECHOS=PASOSHECHOS+$paso, KMHECHOS=KMHECHOS+$dist WHERE REGISTRO_IDUSUARIO=$id";
mysqli_query($con,$query);


$query = "SELECT * FROM registro_has_equipos WHERE REGISTRO_IDUSUARIO=$id";
$consul = mysqli_query($con,$query);


if(mysqli_num_rows($consul)>0){
	
while($row = mysqli_fetch_array($consul))
  {

	 $query = "UPDATE equipos_has_retos SET FECHAACTUALIZACION='$fecha', PASOSHECHOS=PASOSHECHOS+$paso, KMHECHOS=KMHECHOS+$dist WHERE EQUIPOS_IDEQUIPO=$row[EQUIPOS_IDEQUIPO]";
	mysqli_query($con,$query);

}
}
// revisamos los retos del usuario ...
 $query = "SELECT * FROM retosregistrados AS reg INNER JOIN retos AS ret ON reg.RETOS_IDRETO = ret.IDRETO WHERE reg.REGISTRO_IDUSUARIO =$id ";
$consul = mysqli_query($con,$query);
if(mysqli_num_rows($consul)>0){
	
while($row = mysqli_fetch_array($consul))
  {
     if($row['TIPORETO']=="Individual")
	{ 
		if($row['ESTATUSRETO']=="Activo")
		if($row['KMHECHOS']>=$row['DIST'])
		{    //checa si es un reto diario
			if($row['VALIDA'] == 3)
			{	
				if($row['DIAS_SEGUIDOS']<5){//esto es para que el usuario cumpla el reto en 5 dias
					        if($dist >= $row['DIST']){
					        $update = "UPDATE retosregistrados SET DIAS_SEGUIDOS=DIAS_SEGUIDOS+1 WHERE REGISTRO_IDUSUARIO=$id and RETOS_IDRETO =$row[IDRETO]";
							mysqli_query($con,$update);  
						}
				}else{
					if($dist >= $row['DIST']){
							if($row['IDRETO'] == 16){
							$update = "UPDATE retosregistrados SET PASOSHECHOS=0, KMHECHOS=0 WHERE REGISTRO_IDUSUARIO=$id and RETOS_IDRETO =$row[IDRETO]";
							mysqli_query($con,$update);		
							}else{
							$update = "UPDATE retosregistrados SET ESTATUSRETO='Terminado' WHERE REGISTRO_IDUSUARIO=$id and RETOS_IDRETO =$row[IDRETO]";
							mysqli_query($con,$update);
							$row['IDRETO']=$row['IDRETO']+1;
							$querys = "INSERT INTO `retosregistrados`(`REGISTRO_IDUSUARIO`, `RETOS_IDRETO`, `FECHAREGISTRO`, `PASOSHECHOS`, `KMHECHOS`, `FECHAACTUALIZACION`, `ESTATUSRETO`) VALUES ($id,".$row['IDRETO'].",'$fecha',0,0,'$fecha','Activo')";
							mysqli_query($con,$querys);
						    }
						}
					}
			}else{
			$update = "UPDATE retosregistrados SET ESTATUSRETO='Terminado' WHERE REGISTRO_IDUSUARIO=$id and RETOS_IDRETO=$row[IDRETO]";
            mysqli_query($con,$update);
             }
		}
	}else
	{    //entonces sacas los equipos en los que esta el usuario y el equipo en el que esta inscrito en el reto.
			$query1 = "SELECT * FROM  `equipos_has_retos` AS ret INNER JOIN  `registro_has_equipos` AS eq ON ret.equipos_idequipo = eq.equipos_idequipo WHERE ret.retos_idreto = $row[IDRETO] AND eq.registro_idusuario =$id";
			$consul1 = mysqli_query($con,$query1);
			if(mysqli_num_rows($consul1)>0){
				while($row1 = mysqli_fetch_array($consul1))
				{ //ahora preguntamos por cada equipo si esta terminado
					if($row1['KMHECHOS']>=$row['DIST'])
					{ 
						$update = "UPDATE equipos_has_retos SET ESTATUSRETO='Terminado' WHERE EQUIPOS_IDEQUIPO=$row1[EQUIPOS_IDEQUIPO] and RETOS_IDRETO=$row[IDRETO] ";
						mysqli_query($con,$update);	
					   //esta terminado entonces tenems que poner por terminado en su reto por usuario
						$query2 = "SELECT * FROM  `registro_has_equipos` WHERE equipos_idequipo =$row1[EQUIPOS_IDEQUIPO]";
						$consul2 = mysqli_query($con,$query2);
						   if(mysqli_num_rows($consul2)>0){
				               while($row2 = mysqli_fetch_array($consul2)){
										$update = "UPDATE retosregistrados SET ESTATUSRETO='Terminado' WHERE REGISTRO_IDUSUARIO=$row2[REGISTRO_IDUSUARIO] and RETOS_IDRETO=$row[IDRETO] ";
                        				mysqli_query($con,$update);	
                               }
                            }
					}
				}

			}

					
	}

}
}
?>