<?php  
	
	include_once './assets/script/conexao.php';
    include_once './assets/script/funcoes.php';

	# Atuaizando os dados no banco
	$res = update("alunos", $_POST, array("id_aluno"=>$_POST['id_aluno']));

    echo "asdhasudhasu";
    

	if($res){
		header("location: listagem_alunos.php");
	}else{
		header("location: listagem_alunos.php?erro=erro na atualização");		
	}



?>