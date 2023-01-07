<?php
 // Variáveis
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];
 $endereço = $_POST['endereço'];
 $mensagem = $_POST["mensagem"];
 $data_envio = date('d/m/Y');
 $hora_envio = date('H:i:s');
 // CompoE-mail 
 $arquivo = "
    <html>
        <p><b>Nome: </b>$nome</p>
        <p><b>E-mail: </b>$email</p>
        <p><b>Telefone: </b>$telefone</p>
        <p><b>Endereço: </b>$endereço</p>
        <p><b>Mensagem: </b>$mensagem</p>
        <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
 // Emails para quen será enviadooformulário
 $destino = "bluemais.acquastudio@gmail.com";
 $assunto = "Mais informações";
// Este sempre deverá existir para garantiraexibição correta dos caracteres
 $headers = "MIME-Version:1.0\n";
 $headers .= "Content-type:text/html;charset-iso-8859-1\n";
 $headers .= "From: $nome <$email>";
 // Enviar
mail($destino,$assunto,$arquivo,$headers);

echo "<meta http-equiv='refresh' content='10;URL=../index.agenda.html'>";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Mais informações</title>
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

      h2{
      font-size: 20px;
      }
    }

    @media (max-width: 1023px){
      h1{
      margin-top: 500px;
      text-align: center;
      font-size: 70px;
      }

      h2{
      font-size: 50px;
      }
    }

  </style>
</head>
<body>
  <h1>Pedido solicitado!<br> Aguarde algum tempo até um de nossos atendentes entrar em contato pelo whatsapp!</h1><br>
  <h2>Redirecionando...</h2>
</body>
</html>