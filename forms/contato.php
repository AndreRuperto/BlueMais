<?php

 // Variáveis
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $mensagem = $_POST["mensagem"];
 $data_envio = date('d/m/Y');
 $hora_envio = date('H:i:s');
 // CompoE-mail
 $arquivo = "
    <html>
        <p><b>Nome: </b>$nome</p>
        <p><b>E-mail: </b>$email</p>
        <p><b>Mensagem: </b>$mensagem</p>
        <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
 // Emails para quen será enviadooformulário
 $destino = "bluemais.acquastudio@gmail.com";
 $assunto = "Comentário";
// Este sempre deverá existir para garantiraexibição correta dos caracteres
 $headers = "MIME-Version:1.0\n";
 $headers .= "Content-type:text/html;charset-iso-8859-1\n";
 $headers .= "From: $nome <$email>";
 // Enviar
mail($destino,$assunto,$arquivo,$headers);

echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Comentário</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: #000;
    }

    body{
      background-color: blue;
      text-align: center;
      font-family: 'Roboto Mono', monospace;
      color: #25d366;
    }
    @media (min-width: 1024px){
      h1{
      margin-top: 250px;
      font-size: 30px;
      }
    }

    @media (max-width: 1023px){
      h1{
      margin-top: 500px;
      text-align: center;
      font-size: 70px;
      }
    }

  </style>
</head>
<body>
  <h1>Comentário enviado com sucesso!<br> Aguarde, estamos te redirecionando...</h1>
</body>
</html>