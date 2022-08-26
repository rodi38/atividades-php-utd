<?php  

	include_once './assets/script/conexao.php';
	include_once './assets/script/funcoes.php';

	
	# Inserndo os dados no banco
	$res = delete("livros", array("id_livro"=>$_POST['id_livro']));

	if($res){
		header("location: biblioteca.php");
	}else{
		header("location: biblioteca.php?erro=erro no cadastro");		
	}
	

	//var_dump($_POST);

?>