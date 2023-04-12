<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SINCITY</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.nivo-controlNav {
	right:-124px;
}
-->
</style>
<link href="estilos/estilos_contacto.css" rel="stylesheet" type="text/css">
<link href="estilos/reset.css" rel="stylesheet" type="text/css">
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body>
<audio style="float:left; width: 135px;" controls="controls" >
<source src="musica/play hard.mp3" />
</audio>
<div id="contenedor">
<div id="top">
	<div id="botonera">
		<div id="pieres"><a href="index.php"></a></div>
		<div id="botones">
        	<ul>
				<li><a href="fede/cronograma.php">Eventos</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
				<li><a href="disco.php">Disco</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li><a href="videos.php">Videos</a></li>  <li>&nbsp;</li>
                <li>&nbsp;</li>
				<li><a href="fotos.php">Imagenes</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li><a href="contacto.php"class="presionado">Contacto</a></li>
			</ul>
        </div>
		<div id="textura"></div>
	</div>
</div>
<div id="caja"></div>
<div id="contenido">
	<div id="descripcion">
    	<p>&nbsp;</p>
				<div id="contenedorform">
                         <div id="contact-form"> 
					<form action="enviarmail.php" method="post" id='formulario'>
            			<p> <span>Nombre *</span><br><input name="first_name" type="text" size="47" class="field"/> </p>
				<p> <span>Apellido *</span><br> <input name="last_name" type="text" size="47" class="field"/></p>
				<p> <span>Email *</span><br> <input name="email" type="text" size="47" class="field"/></p>
                		<p> <span>Empresa </span><br><input name="empresa" type="text" size="47" class="field"/></p>
				<p> <span>Asunto </span><br><input name="asunto" type="text" size="47" class="field"/></p>
				<p> <span>Comentario</span><br> <textarea name="comments" rows="4" cols="37" class="field"/></textarea></p>
				<p> <input name="Submit" value="Enviar" type="submit" class="enviar"/></p>
				</form>
            </div>
             </div>
            
    </div>
	<div id="cuadrados">		
		<div id="cuadrado1">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><h2>*</h2></p>
        <p>Campos obligatorios</p>
        </div>
		<div id="cuadrado2"></div>
	</div>				
	<div id="splash"></div>
<div id="botom">
	<div id="botonerabotom">
		<div id="publi0">
			<div id="face"><a href="https://www.facebook.com/sincity.casares?fref=ts" target="_blank"></a></div>	
	
		</div>	
		<div id="publi1"></div>	
		<div id="publi2"></div>	
		<div id="publi3"></div>	
		<div id="publi4"></div>	
	</div>
</div>
</div>

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'fade', // Specify sets like: 'fold,fade,sliceDown'
        slices:35, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:0, // Slide transition speed
        pauseTime:1000000000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:true, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:false, // 1,2,3... navigation
        controlNavThumbs:false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel:true, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:false, // Use left & right arrows
        pauseOnHover:false, // Stop animation while hovering
        manualAdvance:true, // Force manual transitions
        captionOpacity:5.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });

});
</script>
</body>
</html>