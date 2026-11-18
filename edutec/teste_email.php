<?php
$to = 'gcmauricio@ufscar.br';
$subject = 'Teste de E-mail PHP';
$message = 'Olá, este é um teste de e-mail enviado via PHP no novo servidor.';
$headers = 'From: noreply@horizonte.ufscar.br' . "\r\n" .
           'Reply-To: noreply@horizonte.ufscar.br' . "\r\n";
if (mail($to, $subject, $message, $headers)) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "Erro: O e-mail não pôde ser enviado. Verifique os logs do sistema para mais detalhes.";
}
?>
