<?php 

// Inclui o arquivo de conexão
include('envia.php');

if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';
	
	// Mata o script
	exit;
}


// Verifica campos em branco
foreach ( $_POST as $chave => $valor ) {
	// Cria as variáveis dinamicamente
	$$chave = $valor;
	
	// Verifica campos em branco
	if ( empty( $valor ) ) {
		// Mensagem para o usuário
		echo 'Existem campos em branco.';
		
		// Mata o script
		exit;
	}
}


// Verifica se todas as variáveis estão definidas
if (  
	   ! isset( $cliente_email      )  
	
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';

	// Mata o script
	exit;
}




// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `phuzion`.`leads` (
		`cliente_email` , 'lead_id'
	) 
	VALUES
	( ? , ?)
");

// Envia
$verifica = $prepara->execute(
	array(
		$cliente_email
	)
);




if ( $verifica ) {
	echo 'OK';
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}


?>




