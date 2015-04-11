
function foto(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var foto = document.getElementById('foto');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				foto.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/foto.php",true);
		xmlHttp.send(null);
}


function fecha(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var fecha = document.getElementById('fecha-s');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				fecha.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/fecha.php",true);
		xmlHttp.send(null);
}


 function x(){
                                
                              var indice = document.formul.miSelect.selectedIndex;
                              var mes = document.formul.miSelect.options[indice].value;
                              document.getElementById('chart1').innerHTML='';
                                $.jqplot.config.enablePlugins = true;
                                var s1 = $.ajax({
                                    url:'./php/datosgrafica.php?mes='+mes,
                                    type:'post',
                                    dataType:'json',
                                    async:false
                                }).responseText;

                                s1 = JSON.parse(s1);

                                var ticks = $.ajax({
                                    url:'./php/datosgraficas.php?mes='+mes,
                                    type:'post',
                                    dataType:'json',
                                    async:false
                                }).responseText;

                                ticks = JSON.parse(ticks);  
                                plot1 = $.jqplot('chart1', s1, {
                                    // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
                                    animate: !$.jqplot.use_excanvas,
                                    seriesDefaults:{
                                        renderer:$.jqplot.BarRenderer,
                                        pointLabels: { show: true }
                                    },
                                    axes: {
                                        xaxis: {
                                            renderer: $.jqplot.CategoryAxisRenderer,
                                            ticks: ticks
                                        }
                                    },
                                    highlighter: { show: false }
                                });
                            
                                

                            }

function lim(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var lim = document.getElementById('prog');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				lim.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/progreso.php",true);
		xmlHttp.send(null);
}

function d() {
<!--  selecciono la clase javascript -->
    var javascript = document.querySelector('.javascript');
    new EasyPieChart(javascript, {
        <!-- activo la animación y establezco su duración a un segundo -->
        animate: ({ duration: 1000, enabled: true }),
        <!-- aumento la longitud de las lineas de la gráfica -->
        scaleLength:10,
        <!-- aumento el tamaño de la gráfica -->
        size:150,
        <!-- añado el número del porcentaje que se muestra en el span -->
        onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent);
        }
    });

   
}

function check(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	
		lim=1;
	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				lim=xmlHttp.responseText;
				if(lim == 0){
					window.location.href='./';
				}
			}
		}
		xmlHttp.open("GET","php/check.php",true);
		xmlHttp.send(null);
}

function grup1(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var lim = document.getElementById('panel1');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				lim.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/grupos.php",true);
		xmlHttp.send(null);
}

function grup2(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var lim = document.getElementById('panel2');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				lim.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/misgrupos.php",true);
		xmlHttp.send(null);
}
function modal(id){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var lim = document.getElementById('inModal');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				lim.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/datosgrupo.php?id="+id,true);
		xmlHttp.send(null);
}

function envia(id){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	
	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				alert(xmlHttp.responseText);
			}
		}
		xmlHttp.open("GET","php/solicitud.php?equipo="+id,true);
		xmlHttp.send(null);
}

function ret1(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var lim = document.getElementById('panel1');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				lim.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/retos.php",true);
		xmlHttp.send(null);
}

function ret2(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	var lim = document.getElementById('panel2');


	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				lim.innerHTML=xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","php/misretos.php",true);
		xmlHttp.send(null);
}

function unir(id){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

	
	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				alert(xmlHttp.responseText);
				window.location.href="retos.html";
			}
		}
		xmlHttp.open("GET","php/unir.php?reto="+id,true);
		xmlHttp.send(null);
}

function enviaPaso(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

		var dist = document.getElementById("km").value;
		var pasos = document.getElementById("pasos").value;
		var fecha = document.getElementById("fecha").value;
	
	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				alert(xmlHttp.responseText);
				//window.location.href="retos.html";
				//setTimeout('d()', 500)
			}
		}
		xmlHttp.open("GET","php/subirpasos.php?pasos="+pasos+"&dist="+dist+"&fecha="+fecha,true);
		xmlHttp.send(null);
}

function trkm(){
     document.getElementById("km").value = document.getElementById("pasos").value/2000;
  }

  function trpasos(){
     document.getElementById("pasos").value = document.getElementById("km").value*2000;
  }


function idrutas(id){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

		cont = document.getElementById('contenido');
		if(id==null)
			id=0;
		
	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				cont.innerHTML = xmlHttp.responseText;
				//window.location.href="retos.html";
			}
		}
		xmlHttp.open("GET","php/idruta.php?id="+id,true);
		xmlHttp.send(null);
}


function noti(){
	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

		cont = document.getElementById('contenido');
		
	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				cont.innerHTML = xmlHttp.responseText;
				//window.location.href="retos.html";
			}
		}
		xmlHttp.open("GET","php/noti.php",true);
		xmlHttp.send(null);
}