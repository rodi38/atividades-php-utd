<?php  

	include_once './assets/script/conexao.php';
	include_once './assets/script/funcoes.php';

	
	# Inserndo os dados no banco
	$res = delete("funcionarios", array("id_funcionario"=>$_POST['id_funcionario']));

	if($res){
		header("location: listagem_funcionarios.php");
	}else{
		header("location: listagem_funcionarios.php?erro=erro no cadastro");		
	}
	

	//var_dump($_POST);

?>