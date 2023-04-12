

<?php
session_start();

if (!isset($_SESSION['autentificado'])) { header ('location: http://localhost/Simcity/logeo.php'); exit();

                                         }
?>





<html>
<head>
<title>Sincity</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script src="jquery.si.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/estilos.css" rel="stylesheet" media="screen">
<style type="text/css">.oculto { position: absolute; top: -9999px; left: -9999px; }</style>

</head>

<body>


<body>
<div id="conteiner">   
 <ul class="nav nav-tabs">
  <li class="active"><a href="#contenido1"> Eventos </a></li>
  <li><a href="#contenido2">Administrar usuarios</a></li>
 
</ul>
<div class="ejemplo">
        <div class="list-wrap">
            <div id="contenido1">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="container">
               <form name="form" action="upload.php" method="post" class="loguin">
                  </br>
                  <span class="label label-info">Descripcion</span></br>

                  <textarea name="descripcion" rows="5" cols="30"></textarea></br></br> </br><h4><span class="label label-info">Seleccion de Imagenes</h4></span></br></br>
                   <span class="label label-primary">Primer evento</span></br>
                   <input type="file"  name="foto1" multiple="multiple" value="imagen del jueves" /></br></br>
                    <span class="label label-primary">Segundo evento</span></br>
                   <input type="file"  name="foto2" multiple="multiple" value="imagen del viernes"/></br></br>
                    <span class="label label-primary">Tercer evento</span></br>
                   <input type="file"  name="foto3" multiple="multiple" value="imagen del sabado" /></br></br></br>

                    <input type="submit" class="btn btn-large btn-primary" value="Subir" title="Ingresar" />
                 
                  </form> 
             </div>

            </div>
            
                
            
            
        </div>
    </div>






</div>


</html>

</body>

</html>
