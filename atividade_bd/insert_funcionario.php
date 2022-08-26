<?php
    include_once './assets/script/conexao.php';
    include_once './assets/script/funcoes.php';

  if(isset($_POST['submit'])){
    unset($_POST['submit']);
  }
    $res = insert("funcionarios", $_POST);

    if($res){
		header("location: listagem_funcionarios.php");
	}else{
		header("location: listagem_funcionarios.php?erro=erro no cadastro");		
	}