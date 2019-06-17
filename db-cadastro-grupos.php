<?php session_start();
include "mysqlconecta.php";
include "mysqlexecuta.php";

$nome = $_POST["nome"];
$id_usuario = $_SESSION["ID"];

$sql = "INSERT INTO grupos (id_categoria, nome_grupo, id_criador) VALUES ('1', '$nome', '$id_usuario');";
$res = mysqlexecuta($con,$sql);
if(mysqli_affected_rows($con)> 0){
	
	echo "<script>
			alert('Grupo adicionado com sucesso!');
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