<?php session_start();
include "mysqlconecta.php";
include "mysqlexecuta.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (nome, email, usuario, senha, img_perfil) VALUES ('$nome', '$email', '$usuario', '$senha', '0');";
$res = mysqlexecuta($con,$sql);
if(mysqli_affected_rows($con)> 0){
	
	$mensagem = "Obrigado pelo seu cadastro no Agenda Web.\r\n\r\n Seus dados de acesso sao:\r\n\r\n Usuario: ".$usuario."\r\n Senha: ".$senha."";
	$assunto = "Seu cadastro no Agenda Web";

	$headers =  "Content-Type:text/html; charset=UTF-8\r\n";
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: AgendaWeb <contato@agendaweb.com.br>\r\n";  // remetente
	$headers .= "Return-Path: contato@agendaweb.com.br\r\n"; // return-path

	$envioemail = mail($email, $assunto, $mensagem, $headers);
	
	echo "<script>
			alert('Usuario cadastrado com sucesso!');
			window.location.assign('entrar.html');
		  </script>
	";
}else{
	echo "<script>
			alert('Ocorreu um erro. Tente novamente ou avise o suporte.');
			history.go(-1);
		  </script>
	";
}

?>