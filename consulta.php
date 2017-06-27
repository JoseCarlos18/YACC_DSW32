<?php
$opcion=(isset($_REQUEST['opcion'])?$_REQUEST['opcion']:0);

switch($opcion){
	case "pag1":{
?>
<div id="pag1"><h1>La diversion se une a la Funcionalidad</h1>
<img src="imagenes/b299730-1.jpg">
<br><br><br><br><br>HTC Desire 650 añade un nuevo acabado estriado a los smartphones. Este teléfono tiene un aspecto moderno y se siente magnífico en la mano. Gracias a nuestro nuevo diseño estriado suave 50/50 en el que la buena apariencia toma un estupendo giro que hace que el teléfono se sujete de forma segura en la mano y te permite saber cuando está hacia arriba con un solo toque.
<a href="#inicio">regresar al inicio</a> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<?php
	break;
}
	case "pag2":{
	echo "segunda pagina";
	break;
}
	case "pag3":{
	echo "tercera pagina";
	break;
}
	case "pag4":{
	echo "cuarta pagina";
	break;
}
	default:{
	echo "<h5>Error</h5>";
	break;
}
}
?>