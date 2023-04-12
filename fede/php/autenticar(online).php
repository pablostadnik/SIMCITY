<?php

$conn=mysql_connect("192.168.0.170","fidbapc","fidbauser");
mysql_select_db("sincity") or  die("Problemas en la seleccion de la base de datos ");

$ssql = "SELECT * FROM usuario WHERE usuario='".$_POST["user"]."' AND password = '".$_POST["pass"]."'"; 
$rs = mysql_query($ssql,$conn) or die("Problema al ejecutar la sentencia sql");





               if (mysql_num_rows($rs)!=0)
               { 

   	                         session_start(); 
	                          $_SESSION["autentificado"]= "SI";
	                          $_SESSION["usuario"]=$_POST["usuario"];
            	              header ('Location:http:../../fede/cronogramaform.php'); 
                            exit(); 
                              
                }


               else { 
                           echo "<script > alert('usuario incorrecto' );  

                            window.location.replace('http:../../fede/cronograma.php');    

                             </script>";
                           exit();
            
   	                         
                       } 
      

  mysql_close($conn);

?> 