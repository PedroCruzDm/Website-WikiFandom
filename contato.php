<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Fale conosco</title>
  <style type="text/css">
    #apDiv1 {
      position: center;
      width: 445px;
      height: 207px;
      z-index: 1;
      text-align: center;
    }
  </style>
  </head>
  <body>
<?php
$nome = $_POST['nome'];
$fome = $_POST['fome'];
$email = $_POST['email'];
$mensagem = $_POST['mensage'];

$dpto = "joaope14dro@gmail.com"
$Titulo = "contato pelo Site";
$Destinatario = "$dpto";
$mensagem1 = "
Nome: $nome
E-mail: $email
Telefone: $fome
Mensagem: $mensagem";
mail("$Destinatario", "$Titulo", "$mensagem1","From: $email");
?>

<div id="apDiv1">
  <p><strong>Mensagem enviada com sucesso.<br />
  <br />
  Em breve estaremos em contato pelos meio informados para responder sua solicitação.<br />
    <spam class="aa">Desde já agradecemos pela visita.<br /> Grato
  </spam></strong><br />
  <form action="javascript:window.close()" method="">
    <p style="text-align: center;">
      <input alt="Fechar" src=".../Figuras/botao_fechar.png" width="71" height="20" alt="Fechar_logo" type="image" />
  </p>
  </form>
</div>
  </body>
</html>