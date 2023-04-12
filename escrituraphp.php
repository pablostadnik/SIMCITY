<?php
$a=file("ejemplo.php");  //transformo archivo cronograma.php en un vector//

                                                $b=fopen('copia.php', 'w');   //abro un archivo nuevo que va se va usar como auxiliar al cronograma.php// 
  
                                               for ($i=0; $i <8 ; $i++)     //RECORRO EL VECTOR DONDE SE DEPOSITO LAS LINEAS DE CRONOGRAMA.PHP//
                                               {
                                            
                                                    switch($i)          //se copian primero las lineas que no se modifican, y luego las q se modifican//
                                                     {

                                                        case(1): 
                                                                   $l="peperino";
                                                                   fwrite($b,$l.PHP_EOL);
                                                                   break;
  
                                                        default:
                                                                   fwrite($b,$a[$i]) ;           




                                                    }
                                                   

                                                 }

                                                 fclose($b);

                                                 //ahora copio el archivo copia.php,que vendria a ser el cronograma.php actualizado con los eventos,al archivo cronograma.php// 

                                                 $b=fopen("copia.php", "r");
                                                 $a=fopen("ejemplo.php","w") ;

                                                 while(!feof($b))
                                                 {

                                                  fwrite($a, fgets($b));

                                                 }

                                                 fclose($b);
                                                 fclose($a);
?>