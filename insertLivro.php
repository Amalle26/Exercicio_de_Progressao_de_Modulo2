<?php

    include_once 'conexao.php';
    include_once 'funcoes.php';

    $res = insert("livros", $_POST);
 
    // var_dump($_POST);

    if($res){
		header("location: listaLivros.php");
	}else{
		header("location: listaLivros.php?erro=erro no cadastro");		
	}

?>