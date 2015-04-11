<br />

<link href="default.css" rel="stylesheet" type="text/css" media="all" />

<script>
    var pre=new Array();
    var str;
    
    function ayuda(help){
        var men;
        switch(help){
            case 1: men="Ni siquiera una vez al mes";
                break;
            case 2: men="Sin un itinerario establecido";
                break;
            /*  
            case 3: men="mesaje ayuda a pregunta 3";
                break;
            case 4: men="mesaje ayuda a pregunta 4";
                break;
            case 5: men="mesaje ayuda a pregunta 5";
                break;
            case 6: men="mesaje ayuda a pregunta 6";
                break;
            case 7: men="mesaje ayuda a pregunta 7";
                break;
            case 8: men="mesaje ayuda a pregunta 8";
                break;
            case 9: men="mesaje ayuda a pregunta 9";
                break;
            */
        }
        //alert("Estas en división de números complejos.\n\n Aquí realizaremos la división de dos números expresados en la forma binomial a'+'bi tienes que introducir la parte real y la parte imaginaria de ambos números, presionar el botón dividir y el sistema arrojara la respuesta");
        alert(men);
      }
      
    function sig(s){
        var sgrup="";
        var hgrup="";
        var cp="";
        var titu="";
        var ar= new Array();
        //var porNombre=document.getElementsByName("deacuerdo");
        var pn,r;
        
        switch(s){
            case 0: //grupo 2 de preguntas
                    sgrup='\n\
                        1. Casi nunca hago actividades fisicas.<a href="javascript:ayuda(1)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p1" value="1" required>Si<input type="radio" name="p1" value="0" checked>No</center><br />2. Hago alguna actividad fisica ligera o moderada, pero no todas las semanas.<a href="javascript:ayuda(2)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p2" value="1" required>Si<input type="radio" name="p2" value="0" checked>No</center><br />3. Todas las semanas hago alguna actividad fisica ligera.<a href="javascript:ayuda(3)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p3" value="1" required>Si<input type="radio" name="p3" value="0" checked>No</center><br><br /><center><a href="javascript:sig(1)" class="link-style1">Siguiente</a></center>';
                    hgrup='Actividad física ligera. Es la actividad en la cual el corazón comienza a latir un poco más rápido de lo normal. Ejemplos de actividades físicas ligeras son: pasear lentamente, barrer o realizar actividades con niños.<br /><br /><center><IMG SRC="imact/Ligera.jpg" WIDTH=250px, HEIGTH=350px ALIGN="MIDDLE"></center>';
                    titu="<center><b>Nivel: Actividades Ligeras</b></center>";
                break;
                
            case 1: //grupo 2 de preguntas
                    //sgrup=' 4. Casi nunca hago actividades fisicas.<a href="javascript:ayuda(1)"><strong>?</strong></a><br /> <center><input type="radio" name="p4" value="1" required>Si<input type="radio" name="p4" value="0" checked>No</center><br />5. Hago alguna actividad fisica ligera o moderada, pero no todas las semanas.<a href="javascript:ayuda(2)"><strong>?</strong></a><br /><center> <input type="radio" name="p5" value="1" required>Si<input type="radio" name="p5" value="0" checked>No</center><br /><br /><center><a href="javascript:sig(2)" class="link-style1">Siguiente</a></center> ';                    
                    sgrup='4. Hago hasta 30 minutos de actividades físicas moderadas al menos 5 días a la semana.<a href="javascript:ayuda(4)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p4" value="1" required>Si<input type="radio" name="p4" value="0" checked>No</center><br />5. Hago 30 minutos o más al día de actividades físicas moderadas, 5 ó más días a la semana.<a href="javascript:ayuda(5)" class="pregunta"><strong>?</strong></a><br /><center> <input type="radio" name="p5" value="1" required>Si<input type="radio" name="p5" value="0" checked>No</center> <br /><br /><center><a href="javascript:sig(2)" class="link-style1">Siguiente</a></center>';
                    hgrup='Actividad Moderada. Aquella en la que el corazón late bastante más de lo normal. Ejemplos de actividades moderadas son: bailar, nadar, subir escaleras.<br /><br /><center><IMG SRC="imact/Moderada.jpg" WIDTH=250px, HEIGTH=350px ALIGN="MIDDLE"></center>';
                    titu="<center><b>Nivel: Actividades Moderadas</b></center>";
                    for(i=1;i<4;i++){
                        pn=document.getElementsByName("p"+i);
                        if(pn[0].checked){
                            pre[i]=1;
                            //cp=cp+pre[i]+", ";
                        }
                        else{
                            pre[i]=0;
                            //cp=cp+pre[i]+", ";
                        }
                            
                    }                                          
                        
                break;
            case 2: //grupo 3 de preguntas
                    //sgrup=' 6. Casi nunca hago actividades fisicas.<a href="javascript:ayuda(6)"><strong>?</strong></a><br /><center><input type="radio" name="p6" value="1" required>Si<input type="radio" name="p6" value="0" checked>No</center><br />7. Hago alguna actividad fisica ligera o moderada, pero no todas las semanas.<a href="javascript:ayuda(7)"><strong>?</strong></a><br /><center><input type="radio" name="p7" value="1" required>Si<input type="radio" name="p7" value="0" checked>No </center> <br />  8. Todas las semanas hago alguna actividad fisica ligera.<a href="javascript:ayuda(8)"><strong>?</strong></a><br /><center> <input type="radio" name="p8" value="1" required>Si<input type="radio" name="p8" value="0" checked>No </center><br> <br /><center><a href="javascript:sig(3)" class="link-style1">Siguiente</a></center> ';
                    sgrup='6. Hago hasta 20 minutos de actividades físicas intensas al menos 3 días a la semana.<a href="javascript:ayuda(6)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p6" value="1" required>Si<input type="radio" name="p6" value="0" checked>No</center><br />7. Hago 20 minutos o más al día de actividades físicas intensas, 3 ó más días a la semana.<a href="javascript:ayuda(7)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p7" value="1" required>Si<input type="radio" name="p7" value="0" checked>No</center><br /><br /><center><a href="javascript:sig(3)" class="link-style1">Siguiente</a></center>';
                    hgrup='Actividad Intensa. Son aquellas en las que el ritmo de tu corazón aumenta demasiado. Ejemplo de estas actvidades son: ciclismo en cuestas, tennis, correr.<br /><br /><center><IMG SRC="imact/Intensas.jpg" WIDTH=200 HEIGTH=450 ALIGN="MIDDLE"></center>';
                    titu="<center><b>Nivel: Actividades Intensas</b></center>";
                    for(i=4;i<6;i++){
                        pn=document.getElementsByName("p"+i);
                        if(pn[0].checked)
                            pre[i]=1;
                        else
                            pre[i]=0;
                            
                    } 
                break;
            case 3: 
                    for(i=6;i<8;i++){
                        pn=document.getElementsByName("p"+i);
                        if(pn[0].checked)
                            pre[i]=1;
                        else
                            pre[i]=0;
                            
                    }                                        
                    
                    for(i=1;i<8;i++){
                        sgrup=sgrup+'<input type="HIDDEN" name="p'+i+'" value="'+pre[i]+'">';
                    }
                    //sgrup=sgrup+' 9. Casi nunca hago actividades fisicas.<a href="javascript:ayuda(9)"><strong>?</strong></a><br /><center><input type="radio" name="p9" value="1" required>Si<input type="radio" name="p9" value="0" checked>No</center> <br />10. Hago alguna actividad fisica ligera o moderada, pero no todas las semanas.<a href="javascript:ayuda(10)"><strong>?</strong></a><br /><center><input type="radio" name="p10" value="1" required>Si<input type="radio" name="p10" value="0" checked>No</center><br /><br /><center><input id="bs" type="submit" value="Evaluar"></center>';
                    sgrup=sgrup+'8. Hago actividades para aumentar la fuerza muscular, como levantamiento de pesas o ejercicios de entrenamiento una o más veces a la semana.<a href="javascript:ayuda(8)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p8" value="1" required>Si<input type="radio" name="p8" value="0" checked>No</center><br />9. Hago actividades para mejorar la flexibilidad, como estiramientos o yoga, una o más veces a la semana.<a href="javascript:ayuda(9)" class="pregunta"><strong>?</strong></a><br /><center><input type="radio" name="p9" value="1" required>Si <input type="radio" name="p9" value="0" checked>No</center><br /><br /><center><input id="bs" type="submit" value="Evaluar"></center>';
                    hgrup=' Actividades como el levantamiento de pesas ayudan a aumentar la fuerza y masa muscular. Disciplinas como el yoga ayudan a una mayor flexibilidad.<br /><center><IMG SRC="imact/rapa2.jpg" WIDTH=250px, HEIGTH=350px ALIGN="MIDDLE"></center>';
                    titu="<center><b>Fuerza y Flexibilidad</b></center>";
                    //sgrup=' 9. Casi nunca hago actividades fisicas.<a href="javascript:ayuda(9)"><strong>?</strong></a><br /><center><input type="radio" name="p9" value="1" required>Si<input type="radio" name="p9" value="0" checked>No</center> <br />10. Hago alguna actividad fisica ligera o moderada, pero no todas las semanas.<a href="javascript:ayuda(10)"><strong>?</strong></a><br /><center><input type="radio" name="p10" value="1" required>Si<input type="radio" name="p10" value="0" checked>No</center><br /><br /><center><a href="javascript:sig(4)" class="link-style1">Siguiente</a></center>';
                break;
        }
        document.getElementById("pre").innerHTML = sgrup;
        document.getElementById("ima").innerHTML = hgrup;
        document.getElementById("prueba").innerHTML = cp;
        document.getElementById("tit").innerHTML = titu;
    }
</script>

    <div id="princ">
        <font size=4.0em>
        <div id="tit">
            <center>
              <b> Valoración rápida de la actividad física </b>
            </center>
        </div>
        </font>
        <form name="f" method="post" action="evaluacionRlog.php">
            <table cellspacing="10" cellpadding="5" border="0px" bgcolor="background: url('../imact/cambia.png') repeat-x scroll center top transparent;">
                <tr>
                    <td>
                        <div id="pre" >Las actividades físicas son actividades en las que te mueves y 
                          aumentas el ritmo del corazón, por encima del ritmo en reposo; y que se 
                          realizan por placer, por trabajo o para desplazarse.<br><br />
                          <rigth><a href="javascript:sig(0)" class="link-style1">Siguiente</a></rigth>
                        </div>
                    </td>

                    <td>
                        <div id="ima">
                            <center><IMG SRC="imact/Introduccion.jpg" WIDTH=250px, HEIGTH=350px ALIGN="MIDDLE"></center>
                        </div>
                    </td>
                </tr>
                
                <!--
                <tr>
                    <td>
                        <div id="prueba">
                        
                        </div>
                    </td>
                </tr>-->
            </table>
        </form>
    </div>


