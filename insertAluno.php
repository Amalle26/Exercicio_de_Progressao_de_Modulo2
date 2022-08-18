<?php

    include_once 'conexao.php';
    include_once 'funcoes.php';

    $res = insert("alunos", $_POST);
 
    // var_dump($_POST);

    if($res){
		header("location: listaAlunos.php");
	}else{
		header("location: listaAlunos.php?erro=erro no cadastro");		
	}

?>