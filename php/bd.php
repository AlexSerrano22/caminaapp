<?php 
function conectar(){
$con=mysqli_connect("localhost","observatorio","(@ImagInacIon@)","observatorio");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $con;
}

