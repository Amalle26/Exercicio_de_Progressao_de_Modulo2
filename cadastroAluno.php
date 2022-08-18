<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title> Cadastro de Alunos | Biblioteca </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Cadastro de Alunos </h1><hr>
			<form action="insertAluno.php" method="POST">
				<div class="row">				
					<div class="mb-3 col-6">
						<label for="aluno" class="form-label">
                            Nome
						</label>
					<input type="text" class="form-control" id="aluno" placeholder="Digite o nome" name="aluno">
					</div>

                    <div class="mb-3 col-4">
						<label for="matricula" class="form-label">
                            Matricula 
						</label>
					<input type="text" class="form-control" id="matricula" placeholder="Digite a matricula" name="matricula">
					</div>

                    <div class="mb-3 col-6">
						<label for="email" class="form-label">
                            Email 
						</label>
					<input type="email" class="form-control" id="email" placeholder="Digite o email" name="email">
					</div>

                    <div class="mb-3 col-4">
						<label for="telefone" class="form-label">
                            Telefone 
						</label>
					<input type="number" class="form-control" id="telefone" placeholder="Digite o telefone" name="telefone">
					</div>

					<div class="mb-3 col-12 text-end">
						<button type="submit" class="btn btn-outline-primary">
						<span class="iconify" data-icon="fluent:send-20-filled"></span>
							Salvar dados
						</button>
					</div>
				</div>			
			</form>

			

		</div>			    
		<div class="col-2"></div>			    
	  </div>
	</div>
</body>
</html>


