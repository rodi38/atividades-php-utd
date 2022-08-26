<?php  

	include_once './assets/script/conexao.php';
	include_once './assets/script/funcoes.php';

	
	# Inserndo os dados no banco
	$res = delete("alunos", array("id_aluno"=>$_POST['id_aluno']));

	if($res){
		header("location: listagem_alunos.php");
	}else{
		header("location: listagem_alunos.php?erro=erro no cadastro");		
	}
	

	//var_dump($_POST);

?>