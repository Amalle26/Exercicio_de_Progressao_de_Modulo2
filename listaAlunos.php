<?php  
  
    include_once 'conexao.php';
    include_once 'funcoes.php';

    $alunos = select("alunos", null, null, " ORDER BY aluno ASC");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title> Lista de Alunos | Biblioteca </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center"> Lista de Alunos </h1><hr>
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th> ID </th>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
                  
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?=$aluno['idAluno'];?></td>
                <td><?=$aluno['aluno'];?></td>
                <td><?=$aluno['matricula'];?></td>
                <td><?=$aluno['email'];?></td>
                <td><?=$aluno['telefone'];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                

</body>
</html>

