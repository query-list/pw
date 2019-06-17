<?php session_start();
include "mysqlconecta.php";
include "mysqlexecuta.php";

$iddel = $_POST["id_del"];
$id_usuario = $_SESSION["ID"];

$sql = "DELETE FROM grupos WHERE id = '$iddel' AND id_criador = '$id_usuario'; ";
$res = mysqlexecuta($con,$sql);
if(mysqli_affected_rows($con)> 0){
	
	echo "<script>
			alert('Grupo deletado com sucesso!');
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