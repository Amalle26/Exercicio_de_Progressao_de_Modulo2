<?php  
  
    include_once 'conexao.php';
    include_once 'funcoes.php';

    $livros = select("livros", null, null, " ORDER BY livro ASC");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title> Lista de Livros | Biblioteca </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center"> Lista de Alunos </h1><hr>
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th> ID </th>
            <th>Nome do Livro</th>
            <th>Gênero</th>
            <th>Autor</th>
            <th>Data de Lançamento</th>
            <th>Ações</th>
        </tr>
        </thead>
                  
        <tbody>
            <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?=$livro['idLivro'];?></td>
                <td><?=$livro['livro'];?></td>
                <td><?=$livro['genero'];?></td>
                <td><?=$livro['autor'];?></td>
                <td><?=$livro['dataLancamento'];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                

</body>
</html>

