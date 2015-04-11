<?php
session_start();
$id = $_SESSION['id'];
include 'bd.php';
$con = conectar();

$consulta = "SELECT * FROM registro WHERE IDUSUARIO = $id";
    //con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
    //de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
	
    $resultado= mysqli_query($con,$consulta);
 
    //si el resultado fue exitoso
    //obtendremos el dato que ha devuelto la base de datos
    $datos = mysqli_fetch_assoc($resultado);
 	
 	if($datos['IMAGEN']!=null){
    //ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
    	$imagen = 'php/imagen.php?id='.$id;

     }else{

     	$imagen = 'images/sinfoto.jpg';

     }
    echo '<img src="'.$imagen.'" heigth="80px" >';

    ?>