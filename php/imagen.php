<?php
include 'bd.php';
$con=conectar();
$id=$_GET['id'];
$consulta = "SELECT IMAGEN,T_IMA FROM registro WHERE IDUSUARIO = $id";
    //con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
    //de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
    $resultado= mysqli_query($con,$consulta);
 
    //si el resultado fue exitoso
    //obtendremos el dato que ha devuelto la base de datos
    $datos = mysqli_fetch_assoc($resultado);
 
    //ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
    $imagen = $datos['IMAGEN'];
    $tipo = $datos['T_IMA'];
     
    //ahora colocamos la cabeceras correcta segun el tipo de imagen
    header("Content-type: $tipo");
     
    echo $imagen;
?>