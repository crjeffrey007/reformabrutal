<?php
  // Datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  // Email donde recibir las respuestas
  $destinatario = 'crjeffrey7@gmail.com';

  // Asunto del email
  $asunto = 'Formulario de contacto';

  // Cuerpo del email
  $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

  // Cabeceras del email
  $cabeceras = "From: $nombre <$email>\r\n";
  $cabeceras .= "Reply-To: $email\r\n";

  // Enviar email
  mail($destinatario, $asunto, $cuerpo, $cabeceras);

  // Redirigir al usuario a una página de confirmación
  header('Location: confirmacion.html');
?>
