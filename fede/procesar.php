<?php

session_start();

if ($_FILES['foto1']['error'] > 0) { if($_FILES['foto2']['error'] > 0) { if ($_FILES['foto3']['error'] > 0) {echo "<script > alert('Falta agregar imagenes' );  

                                         window.location.replace('cronograma.php');

                                        </script>";}}}

else{






	if (($_FILES['foto1']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap")AND($_FILES['foto2']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap") AND ($_FILES['foto3']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap"))  
                                           {              $a="eventos/1.jpg";
                                                      $b="eventos/2.jpg";
                                                       $c="eventos/3.jpg"; 

                                                       // levantar fotos del evento//

                                                    move_uploaded_file($_FILES['foto1']['tmp_name'],$a); 
                                                    move_uploaded_file($_FILES['foto2']['tmp_name'],$b);
                                                    move_uploaded_file($_FILES['foto3']['tmp_name'],$c);



                                                         
                                                    $d1=$_POST['descripcion1'];
                                                    $d2=$_POST['descripcion2'];
                                                    $d3=$_POST['descripcion3'];
                                                    $f1=$_POST['fecha1'];
                                                    $f2=$_POST['fecha2'];
                                                    $f3=$_POST['fecha3']; 
                                                    $_SESSION['ok']="si" ;
                                         
                                                //modificacion de fechas y descripciones del evento//
            
                                                $a=file("cronograma.php");  //transformo archivo cronograma.php en un vector//
                                                  
                                                $b=fopen('copia.php', 'w');   //abro un archivo nuevo que va se va usar como auxiliar al cronograma.php// 
  
                                               for ($i=0; $i <255 ; $i++)     //RECORRO EL VECTOR DONDE SE DEPOSITO LAS LINEAS DE CRONOGRAMA.PHP//
                                               {
                                            
                                                    switch($i)          //se copian primero las lineas que no se modifican, y luego las q se modifican//
                                                     {

                                                        case(160): 
                                                                   $l="<h4>".$f1."</h4>";
                                                                   fwrite($b,$l.PHP_EOL);
                                                                   break;

                                                        case(161): 
                                                                   $l="<p>".$d1."</p>";
                                                                   fwrite($b,$l.PHP_EOL);
                                                                   break;

                                                        case(167): 
                                                                   $l="<h4>".$f2."</h4>";
                                                                   fwrite($b,$l.PHP_EOL);
                                                                   break;
                                                        case(168): 
                                                                   $l="<p>".$d2."</p>";
                                                                   fwrite($b,$l.PHP_EOL);
                                                                   break;  

                                                         case(174): 
                                                                   $l="<h4>".$f3."</h4>";
                                                                   fwrite($b,$l.PHP_EOL);
                                                                   break;

                                                        case(175): 
                                                                   $l="<p>".$d3."</p>";
                                                                   fwrite($b,$l.PHP_EOL);
                                                                   break;   
                                                        default:
                                                                   fwrite($b,$a[$i]) ;           




                                                    }
                                                   

                                                 }

                                                 fclose($b);

                                                 //ahora copio el archivo copia.php,que vendria a ser el cronograma.php actualizado con los eventos,al archivo cronograma.php// 

                                                 $b=fopen("copia.php", "r");
                                                 $a=fopen("cronograma.php","w") ;

                                                 while(!feof($b))
                                                 {

                                                  fwrite($a, fgets($b));

                                                 }

                                                 fclose($b);
                                                 fclose($a);


                                                 echo "<script > alert('Los eventos han sido cargados ' );  

                                                       window.location.replace('cronograma.php?');

                                                          </script>";

                 

                                             }
}                                        








































































                                                 
















