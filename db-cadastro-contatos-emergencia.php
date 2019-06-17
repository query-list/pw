<?php session_start();
include "mysqlconecta.php";
include "mysqlexecuta.php";

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$email = null;
$observacao = $_POST["observacao"];
$grupo = $_POST["grupo"];
$varid = $_SESSION["ID"];

$sql = "INSERT INTO contatos (id_categoria, nome, endereco, telefone, email, observacao, grupo_id, id_criador) VALUES ('0', '$nome', '$endereco', '$telefone', '$email', '$observacao', '$grupo', '$varid');";
$res = mysqlexecuta($con,$sql);
if(mysqli_affected_rows($con)> 0){
	
	echo "<script>
			alert('Contato adicionado com sucesso!');
			history.go(-1);
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