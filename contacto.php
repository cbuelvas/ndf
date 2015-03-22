<?php
  if($_POST){
    $to = 'contacto@nelsondiazfotografia.com';
    $subject = $_POST['inputSub3'];
    $from_name = $_POST['inputNames3'];
    $from_email = $_POST['inputEmail3'];
    $mes = $_POST['inputMsg3'];
    $header = "From: $from_name <$from_email>";
    $message="$mes\n\n\n Mensaje enviado desde http://nelsondiazfotografia.com";
    mail($to,$subject,$message,$header);

    header("Location: /index.html");
  }

?>
