
<?php



if ($_FILES['foto1']['error'] > 0) { if($_FILES['foto2']['error'] > 0) { if ($_FILES['foto3']['error'] > 0) {echo "<script > alert('Falta agregar imagenes' );  

       window.location.replace('admin.php');

     </script>";}}}


else{


          
       
       
          if (($_FILES['foto1']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap")AND($_FILES['foto2']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap") AND ($_FILES['foto3']['type'] == "image/jpeg" || "image/png" || "image/gif" || "image/ief" || "image/x-portable-bitmap"))  { 
                $a="eventos/1.jpg";
                $b="eventos/2.jpg";
                $c="eventos/3.jpg"; 
                $descripcion=$_POST['descripcion'];

                move_uploaded_file($_FILES['foto1']['tmp_name'],$a); 
                move_uploaded_file($_FILES['foto2']['tmp_name'],$b);
                move_uploaded_file($_FILES['foto3']['tmp_name'],$c);

                 echo "<script > alert('Los eventos se han cargado con exito' );  

                                window.location.replace('cronograma.php');

                                   </script>";

     }

           
         else {echo "<script > alert('inserte un archivo tipo imagen' );  

       window.location.replace('admin.php');

     </script>";}
 
     











                

        }

  


 ?>                                                                                                


