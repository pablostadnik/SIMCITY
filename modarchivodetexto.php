    <?php
 
    // Abrir el archivo
    $archivo = 'ejemplo.txt';
    $abrir = fopen($archivo,'r+');
    $contenido = fread($abrir,filesize($archivo));
    fclose($abrir);
     
    // Separar linea por linea
    $contenido = explode("\n",$contenido);
     
    // Modificar linea deseada ( 2 )
    $contenido[2] = 'jajaja little monkey';
     
    // Unir archivo
    $contenido = implode("\r\n",$contenido);
     
    // Guardar Archivo
    $abrir = fopen($archivo,'w');
    fwrite($abrir,$contenido);
    fclose($abrir);
     
    ?>
