<br />
<?php
header('Content-Type: text/html; charset=UTF-8'); 
?>

        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    
        
        
            <div id="princ">
            <font size="4.0em">
            <div id="tit">
                <center>
                  <b> Resultado de Cuestionario </b>
                </center>
            </div>
            </font>
            <form name="f" method="post" action="resdiv.php">
                <table cellspacing="10" cellpadding="5" border="0px" bgcolor="#e4e2e2">
                    <tr>
                        <td>
                            <div id="pre" >
                                <?php
                                    $cat=0;
                                    for($i=1;$i<10;$i++){
                                        $res[$i]=$_REQUEST["p$i"];
                                       // echo ("p$i , $res[$i] <br />");
                                        if($i<8 && $res[$i]==1)
                                            $cat=$i;
                                    }
                                    
                                    if(($cat==6 || $cat==7) && ($res[8]==1 || $res[9]==1))
                                        $cat=$cat+2;
                                    
                                    $pun=0;                                                            

                                    if($cat<6)
                                        echo ("<br />Su actividad fisica esta por debajo de lo recomendable<br />");
                                    else
                                        echo ("<br />Su actividad fisica esta dentro de lo recomendable<br />");

                                    switch ($cat){
                                        //sedentario
                                        case 0:
                                        case 1:
                                                echo "<br />Eres una persona SEDENTARIA<br /><br />Tu primer reto es caminar 5000 pasos diarios.<br /><br />";
                                            break;
                                        //poco activo
                                        case 2:
                                        case 3:
                                                echo "<br />Eres una persona poco ACTIVA<br /><br />Tu primer reto es caminar 7499 pasos diarios.<br /><br />";
                                            break;
                                        //moderadamente activo
                                        case 4:
                                        case 5:
                                                echo "<br />Eres una persona MODERADAMENTE ACTIVA<br /><br />Tu primer reto es caminar 9999 pasos diarios.<br /><br />";
                                            break;
                                        //activo
                                        case 6:
                                        case 7:
                                                echo "<br />Eres una persona ACTIVA<br /><br />Tu primer reto es caminar 12500 pasos diarios.<br /><br />";
                                            break;
                                        case 8:
                                        case 9:
                                                echo "<br />Eres una persona MUY ACTIVA<br /><br />Tu primer reto es SUPERAR los 12500 pasos diarios.<br /><br />";
                                            break;
                                    }

                                ?>
                            </div>
                        </td>

                        <td>
                            <div id="ima">
                                <center><IMG SRC="imact/escalacam.jpg" WIDTH=100%, HEIGTH=100% ALIGN="MIDDLE"></center>
                            </div>
                        </td>
                    </tr>                   
                </table>
            </form>
        </div>
        
        
   