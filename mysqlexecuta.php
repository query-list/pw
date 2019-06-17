<?php
/* 
Esta função executa um comando SQL no banco de dados MySQL
$id – Ponteiro da Conexão 
$sql – Cláusula SQL a executar 
$erro – Especifica se a função exibe ou não(0=não, 1=sim)
$res – Resposta 
*/ 

function mysqlexecuta($con,$sql,$erro = 1) { 
    if(empty($sql) OR !($con)) 
       return 0; 
   if (!($res = mysqli_query($con,$sql))) { 

      if($erro) 
        echo 	"Ocorreu
				um erro na execução do Comando SQL no banco de dados. Favor
				Contactar o Administrador.";
			echo "".mysqli_error($con);
      exit;
   } 
	//echo "Executa com Sucesso!.";
   return $res; 

 }

?>