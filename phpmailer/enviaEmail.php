<?php 

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require 'PHPMailerAutoload.php';

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = 'mx1.hostinger.com.br'; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'contato@dsl.esy.es'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'zaq12wsx'; // Senha do servidor SMTP (senha do email usado)
$mail->SMTPSecure = "tls";
$mail->Port = '2525';

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato@dsl.esy.es"; // Seu e-mail
$mail->Sender = "contato@dsl.esy.es"; // Seu e-mail
$mail->FromName = "Daniel"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('daniel.leao77@gmail.com');
//$mail->AddAddress('e-mail@destino2.com.br');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(false); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = 'Este é o corpo da mensagem de teste, em HTML!
 <IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"   class="wp-smiley"> ';
$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n
<IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Não foi possível enviar o e-mail.

";
    echo "Informações do erro:
" . $mail->ErrorInfo;

print_r($mail->Port);
    
}
