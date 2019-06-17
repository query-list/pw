<?php session_start();
include "mysqlconecta.php";
include "mysqlexecuta.php";

$iduser = $_SESSION["ID"];

include "Upload.class.php"; 
	if (isset($_FILES['foto'])){
	$_SESSION['arquivo'] = 1;
	$upload = new Upload($_FILES['foto'], 1000, 800, "images/perfil/"); 
	$upload->salvar();
	$nomearquivo = $novo_nome;
	}
	if ($_SESSION['arquivo'] == 1){
	$nomearquivo ="images/perfil/".$_COOKIE['nomearquivo'];
	}else{
	$nomearquivo = NULL;
	}
$_SESSION["Perfil"] = $nomearquivo;
$sql = "UPDATE usuarios set img_perfil = '$nomearquivo' WHERE id = '$iduser'";
$res = mysqlexecuta($con,$sql);
if(mysqli_affected_rows($con)> 0){
	
	echo "<script>
			alert('Foto atualizada com sucesso!');
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