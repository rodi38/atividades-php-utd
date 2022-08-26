<?php
    include_once './assets/script/conexao.php';
    include_once './assets/script/funcoes.php';

  if(isset($_POST['submit'])){
    unset($_POST['submit']);
  }
    $res = insert("livros", $_POST);

    if($res){
		header("location: biblioteca.php");
	}else{
		header("location: biblioteca.php?erro=erro no cadastro");		
	}