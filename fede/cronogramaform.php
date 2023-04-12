


<?php

    session_start();

    if (isset($_SESSION['autentificado'])) 

    { 
                                                  ?> <html>
                                                     <head>
                                                     <title>Sincity</title>
                                                     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                                     <script src="jquery.si.js" type="text/javascript"></script>
                                                     <script type="text/javascript" src="js/jquery.js"></script>
                                                     <script type="text/javascript" src="js/bootstrap.js"></script>
                                                     <link href="css/bootstrap.css" rel="stylesheet" media="screen"> 
                                                     <link href="css/estilos.css" rel="stylesheet" media="screen">
                                                     <link href="../../bootstrap-2.3.2/docs/assets/css/bootstrap.css" rel="stylesheet">
                                                      <link href="../../bootstrap-2.3.2/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
                                                      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
                                                    <style type="text/css">.oculto { position: absolute; top: -9999px; left: -9999px; }</style> 
                                                     </head>

                                                  
                                                     <body>
                                                     <div id="conteiner">   
                                                       <ul class="nav nav-tabs">
                                                         <li class="active"><a href="#contenido1"> Eventos </a></li>
                                                         <li><a href="#contenido2">Administrar usuarios</a></li> 
                                                       </ul> 
                                                      <div class="ejemplo">
                                                       <div class="list-wrap">
                                                        <div id="contenido1">
                                                         <form action="procesar.php" method="post" enctype="multipart/form-data" class="loguin">
                                                            <div class="container">
                                                           
                                                             </br>
                                                     &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp<span class="label label-info"><strong>CREACION DE EVENTOS</strong></span></br>    </br>

                                                            <span class="label label-success">Foto Del jueves</span></br>
                                                            <input type="file"  name="foto1" multiple="multiple"  /></br>
                                                            <span class="label label-primary">Descripcion</span></br>
                                                            <textarea name="descripcion1" rows="2" cols="40"></textarea></br>
                                                            <span class="label label-primary">Fecha  dd/mm/aa</span></br>
                                                            
                                                             <input type="text"  name="fecha1" placeholder="fecha" value="" /></br>
                                                             <p>-----------------------------</p>
                                                             <span class="label label-success">Foto Del viernes</span></br>
                                                            <input type="file"  name="foto2" multiple="multiple"  /></br>
                                                            <span class="label label-primary">Descripcion</span></br>
                                                            <textarea name="descripcion2" rows="2" cols="40"></textarea></br>
                                                            <span class="label label-primary">Fecha  dd/mm/aa</span></br>
                                                             <input type="text"  name="fecha2" placeholder="fecha" /></br>
                                                             <p>-----------------------------</p>
                                                             <span class="label label-success">Foto Del sabado</span></br>
                                                            <input type="file"  name="foto3" multiple="multiple" value="imagen del jueves" /></br>
                                                            <span class="label label-primary">Descripcion</span></br>
                                                            <textarea name="descripcion3" rows="2" cols="40"></textarea></br>
                                                            <span class="label label-primary">Fecha  dd/mm/aa</span></br>
                                                            <input type="text"  name="fecha3" placeholder="fecha" />
                                                            <input type="hidden" name="op"  value="ok">
                                                            <input type="submit" name="casa" class="btn btn-large btn-primary" value="Subir" title="Ingresar" />
                                                            
                 
                                                             </form> 
                                                                           </div>
 
                                                                              </div>
            
                
            
            
                                                                        </div>
                                                                       </div>






                                                                          </div>
  
                                                               
                                                                  
                                                              </body>

                                                           </html>';

                  <?php 
                                
                       if(isset($_POST['op']))
                       {                

                                            
 
                                              
                                                  
                                         if ($_FILES['foto1']['error'] > 0) { if($_FILES['foto2']['error'] > 0) { if ($_FILES['foto3']['error'] > 0) {echo "<script > alert('Falta agregar imagenes' );  

                                         window.location.replace('cronograma.php');

                                        </script>";}}}


                                        else{


          
       
       
                                         if (($_FILES['foto1']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap")AND($_FILES['foto2']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap") AND ($_FILES['foto3']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap"))  
                                           {           $a="eventos/1.jpg";
                                                      $b="eventos/2.jpg";
                                                       $c="eventos/3.jpg"; 

                                                       

                                                     move_uploaded_file($_FILES['foto1']['tmp_name'],$a); 
                                                     move_uploaded_file($_FILES['foto2']['tmp_name'],$b);
                                                     move_uploaded_file($_FILES['foto3']['tmp_name'],$c);
                                                         
                                                      
                 
                                                
                                                      $descripcion1=$_POST['descripcion1'];
                                                      $descripcion2=$_POST['descripcion2'];
                                                      $descripcion3=$_POST['descripcion3'];
                                                      $fecha1=$_POST['fecha1'];
                                                      $fecha2=$_POST['fecha2'];
                                                      $fecha3=$_POST['fecha3'];

                                                       echo"<script type='text/javascript' > 
                                  
                                                              var d1=document.getElementById('descripcion1');

                                                              d1.firstChild.nodeValue='<?php echo $descripcion1; ?>'; 

                                                              var d2=document.getElementById('descripcion2');

                                                              d2.firstChild.nodeValue='<?php echo $descripcion2; ?>'; 

                                                              var d3=document.getElementById('descripcion3');

                                                              d3.firstChild.nodeValue='<?php echo $descripcion3; ?>'; 

                                                              var f1=document.getElementById('fecha1');

                                                              f1.firstChild.nodeValue='<?php echo $fecha1; ?>'; 

                                                               var f2=document.getElementById('fecha2');

                                                              f2.firstChild.nodeValue='<?php echo $fecha2; ?>';

                                                               var f3=document.getElementById('fecha3');

                                                              f3.firstChild.nodeValue='<?php echo $fecha3; ?>';

                                                            </script>";

                                                      session_destroy();  

                                                      echo "<script > alert('Los eventos han sido cargados ' );  

                                                       window.location.replace('cronograma.php');

                                                          </script>";

                 

                                             }

           
                                               else 
                                                {   echo "<script > alert('inserte un archivo tipo imagen' );  

                                                       window.location.replace('cronograma.php');

                                                          </script>";



                                                 }
 
                                


                                  }

                           }        }
                    ?>
