<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title> Cadastro de Livros | Biblioteca </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Cadastro de Livros </h1><hr>
			<form action="insertLivro.php" method="POST">
				<div class="row">				
					<div class="mb-3 col-6">
						<label for="nomeLivro" class="form-label">
                            Nome do Livro
						</label>
					<input type="text" class="form-control" id="nomeLivro" placeholder="Digite o nome" name="nomeLivro">
					</div>

                    <div class="mb-3 col-4">
						<label for="genero" class="form-label">
                            Gênero 
						</label>
					<input type="text" class="form-control" id="genero" placeholder="Digite a gênero" name="genero">
					</div>

                    <div class="mb-3 col-6">
						<label for="autor" class="form-label">
                            Autor 
						</label>
					<input type="text" class="form-control" id="autor" placeholder="Digite o autor" name="autor">
					</div>

                    <div class="mb-3 col-4">
						<label for="dataLancamento" class="form-label">
                            Data de Lançamento
						</label>
					<input type="date" class="form-control" id="dataLancamento" name="dataLancamento">
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


