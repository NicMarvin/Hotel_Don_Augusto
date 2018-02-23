<?php
//llamando a los campos

$nombre       = @trim(stripslashes($_POST['nombre']));
$correo       = @trim(stripslashes($_POST['correo'])); 
$telefono    = @trim(stripslashes($_POST['telefono'])); 
$mensaje    = @trim(stripslashes($_POST['mensaje']));

//datos para el correo
$destinatario = 'augustohotel2018@gmail.com';
$asunto = 'Contacto desde nuestra web';

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "telefono: $telefono \n";
$carta .= "Mensaje: $mensaje ";

//enviando mensaje
$send = mail($destinatario, $asunto, $carta);

if($send) 
{ 
echo '<script language="javascript"> alert("El mensaje ha sido enviado correctamente. Gracias por preferirnos"); </script>'; 
echo '<script language="JavaScript"> window.location.href ="index.html" </script>';
} 

?>