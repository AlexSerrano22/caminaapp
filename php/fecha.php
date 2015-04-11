<?php
$m = date("n");

$cad = '<form name="formul"><select name="miSelect" onchange="x()">';

for($i=1; $i<13;$i++){
if($i == $m)
	$cad.= "<option selected ";
else
	$cad.= "<option ";
switch ($i) {
	case 1:
		$cad.="value='1'>Enero</option>";
		break;
	case 2:
		$cad.="value='2'>Febrero</option>";
		break;
	case 3:
		$cad.="value='3'>Marzo</option>";
		break;
	case 4:
		$cad.="value='4'>Abril</option>";
		break;
	case 5:
		$cad.="value='5'>Mayo</option>";
		break;
	case 6:
		$cad.="value='6'>Junio</option>";
		break;
	case 7:
		$cad.="value='7'>Julio</option>";
		break;
	case 8:
		$cad.="value='8'>Agosto</option>";
		break;
	case 9:
		$cad.="value='9'>Septiempre</option>";
		break;
	case 10:
		$cad.="value='10'>Octubre</option>";
		break;
	case 11:
		$cad.="value='11'>Noviembre</option>";
		break;
	case 12:
		$cad.="value='12'>Diciembre</option>";
		break;
	
	
		break;
}
}

echo $cad.= "</select></form>";
?>