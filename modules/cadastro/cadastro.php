<?php


$servidor = '108.179.193.42';
$nomeBanco = 'phuzion_site';
$usuario = 'phuzion_chris';
$senha = 'pipo!2017';
$strcon = mysqli_connect($servidor, $usuario, $senha, $nomeBanco); 

$email = $_POST['email'];

if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}



$sql = "INSERT INTO leads (cliente_email) VALUES ";

$sql .= "('$cliente_email')"; 



mysqli_query($strcon,$sql)
	 
	 or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);




echo "Muito obrigado pelo cadastro e interesse!!";
header('Refresh: 3; URL=http://localhost/phuzion');

?>