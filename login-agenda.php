<?php session_start();
include "mysqlconecta.php";
include "mysqlexecuta.php";

$post_usuario = $_POST["username"];
$post_senha = $_POST["pwd"];

$sql = "SELECT * FROM usuarios WHERE usuario = '$post_usuario' AND senha = '$post_senha'";
$res = mysqlexecuta($con,$sql);
$row = mysqli_fetch_array($res);
if(mysqli_num_rows($res)> 0){
	$_SESSION["ID"] = $row["id"];
	$_SESSION["Nome"] = $row["nome"];
	$_SESSION["Email"] = $row["email"];
	$_SESSION["Perfil"] = $row["img_perfil"];
	
	header("Location: index.php");
}else{
	echo "<script>
			alert('Usuario ou senha incorretos!');
			history.go(-1);
		  </script>
	";
}

?>