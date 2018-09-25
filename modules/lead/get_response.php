<?php 

		require_once("config.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//mail functions 
		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';

if((isset($_POST['your_email'])&& $_POST['your_email'] !=''))
	{
	
	$yourEmail = $conn->real_escape_string($_POST['your_email']);

	$sql="INSERT INTO leads (cliente_email, lead_id ) VALUES ('".$yourEmail."','')";


	if(!$result = $conn->query($sql)){
		die('There was an error running the query [' . $conn->error . ']');
	}
	else
	{	
		echo "Recebemos seu cadastro com sucesso! Você receberá nosso contato em breve!";

		

		$mail = new PHPMailer(true);

		try {

   		//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only

    	$mail->isSMTP();
    	$mail->Host = 'srv184.prodns.com.br';
    	$mail->SMTPAuth = true;
    	$mail->Username = 'no-reply@phuzion.com.br';
    	$mail->Password = 'galateia123';
    	$mail->SMTPSecure = 'ssl';
    	$mail->Port = 465;  //or 587

    	$mail->setFrom('no-reply@phuzion.com.br', 'Phuzion Metrics');
    	$mail->addAddress('christiancaires@galateia.com.br', 'Christian Caires');     // Add a recipient
    	$mail->addReplyTo('no-reply@phuzion.com.br', 'Phuzion Metrics');
    	$mail->addCC('f.hideki@hotmail.com');

    	//$mail->addAttachment('local_do_anexo/arquivo.extenção', 'NomeAmigavel.extenção');

    	$mail->isHTML(true);
    	$mail->Subject = 'Parabens!! Novo interessado em nosso sistema!';
    	$mail->Body = 'Eae pessoal, existe uma nova pessoa que precisa do Phuzion m&eacute;trics. Vamos colocar ele no ar? ;)';
    	//$mail->AltBody = 'Conteúdo alternativo (em texto simples), caso destinatário não possa receber em HTML';
    	 $mail->send();
   		

   		//echo 'Message has been sent';
		
		} catch (Exception $e) {
    			//echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}



	}
}
else
{
	echo "Por favor, digite seu melhor email";
}
?>