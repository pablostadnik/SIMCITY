<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PIERES</title>
<link rel="stylesheet" href="../estilos/orbit-1.2.3.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="../../bootstrap-2.3.2/docs/assets/css/bootstrap.css" rel="stylesheet">
<link href="../../bootstrap-2.3.2/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
<style type="text/css">
#login{
  position:relative; 
  margin: 0 auto;
  width: 150px;
  }   
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#wrappes{
      width: 600px;
      margin: auto;
      height: 400px;
      margin-top: 30px;
    }
</style>
		<script type="text/javascript" src="../java/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="../java/jquery.orbit-1.2.3.min.js"></script>	
		 <style type="text/css">
			         .timer { display: none !important; }
			         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
			    </style>		
		<script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit({
     animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
     animationSpeed: 800,                // how fast animtions are
     timer:false, 			 // true or false to have the timer
     advanceSpeed: 800, 		 // if timer is enabled, time between transitions 
     pauseOnHover: false, 		 // if you hover pauses the slider
     startClockOnMouseOut: false, 	 // if clock should start on MouseOut
     startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
     directionalNav: true, 		 // manual advancing directional navs
     captions: true, 			 // do you want captions?
     captionAnimation: 'fade', 		 // fade, slideOpen, none
     captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
     bullets: false,			 // true or false to activate the bullet navigation
     bulletThumbs: false,		 // thumbnails for the bullets
     bulletThumbLocation: '',		 // location from this file where thumbs will be
     afterSlideChange: function(){} 	 // empty function 
});
});
		</script>
<link href="../estilos/estilos.css" rel="stylesheet" type="text/css">
<link href="../estilos/reset.css" rel="stylesheet" type="text/css">
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
</style>
<script language="JavaScript" type="text/JavaScript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</head>
<body>
<div id="login">
       <form  name="form" action="php/autenticar.php" method="post" class="loguin">
       <h2 class="form-signin-heading"> Login  Admin</h2>
       <input type="text" class="input-block-level" name="user" placeholder="Usuario" />
       <input type="password" class="input-block-level" name="pass" placeholder="Password" />
       <input type="submit" class="btn btn-large btn-primary" value="Ingresar" title="Ingresar" name="enviar" />
       </form> 
       </div>
<div id="contenedor">
<div id="top">
	<div id="botonera">
		<div id="pieres"><a href="pieres.php"></a></div>
		<div id="botones">
        	<ul>
				<li><a href="cronograma.php"class="presionado">Eventos</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
				<li><a href="bar.php">Bar</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
				<li><a href="videos.php">Videos</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
				<li><a href="fotos.php">Imagenes</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li><a href="contacto.php">Contacto</a></li>
			</ul>
        </div>
		<div id="textura"></div>
	</div>
</div>
         <div id="wrappes">
          <section id="carousel">
                        <div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img style="width:700px;height:400px;"src="eventos/1.jpg" alt="">
                    <div class="carousel-caption">
<h4></h4><p></p>                    <div class="carousel-caption">
<h4></h4><p></p>                    </div>
                  </div>
<h4></h4><p></p>                    <div class="carousel-caption">
<h4></h4><p></p>                      </div>
<h4></h4><p></p>              </div>
<h4></h4><p></p><div id="caja"></div>
<div class="borrar"></div>
	</div>
<div id="botom">
<h4></h4><p></p>			<div id="face"><a href="http://www.facebook.com/profile.php?id=100003179559291" target="_blank"></a></div>	
			<div id="twi"><a href="http://twitter.com/#!/PieresLaPlata" target="_blank"></a></div>	
		</div>	
		<div id="publi1"></div>	
		<div id="publi2"></div>	
		<div id="publi3"></div>	
		<div id="publi4"></div>	
	</div>
</div>
</div>
  <script src="../../bootstrap-2.3.2/docs/assets/js/jquery.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-transition.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-alert.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-modal.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-tab.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-popover.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-button.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-collapse.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="../../bootstrap-2.3.2/docs/assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../bootstrap-2.3.2/docs/assets/js/holder/holder.js"></script>
</div>
</body>
</html>