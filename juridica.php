
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>Cadastro</title>
</head>
<body>
	<div class="risco-topo"></div>
	<div class="card-header text-center card-header-modificador">
		<h2  align="center"> Cadastro de Pessoa Jurídica </h2>
	</div>
	<div class="container">
		<h1  class="texto-principal" align="center"> Cadastro de Pessoa Jurídica </h1>
		<hr>
		<form method="post" action="processarJuridica.php">

			<div class="form-row">
				<div class="col-md-1 mb-3">
					<label for="id">ID: </label>
					<input type="text" class="form-control" name="id" id="id"  required>
				</div>
				<div class="col-md-11 mb-3">
					<label for="nome">Nome: </label>
					<input type="text" class="form-control" name="nome" id="nome"  required>
				</div>
			</div>
			<h2>Cidade</h2>
			<hr>	
			<div class="form-row">					
				<div class="col-md-2 mb-3">
					<label for="idCidade">ID: </label>
					<input type="text" class="form-control" name="idCidade" id="idCidade"  required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="nomeCidade">Nome: </label>
					<input type="text" class="form-control" name="nomeCidade" id="nomeCidade">
				</div>
				<div class="col-md-3 mb-3">
					<label for="uf">Estado: </label>
					<input type="text" class="form-control" name="uf" id="uf">
				</div>			
				<div class="col-md-3 mb-3">
					<label for="cep">CEP: </label>
					<input type="text" class="form-control" name="cep" id="cep">
				</div>
			</div>			
			<h2>Tipo</h2>
			<hr>	
			<div class="form-row">				
				<div class="col-md-6 mb-3">
					<label for="tipoId">ID: </label>
					<input type="text" class="form-control" name="tipoId" id="tipoId"  required>
				</div>
				<div class="col-md-6 mb-3">
					<label for="tipoNome">Nome: </label>
					<input type="text" class="form-control" name="tipoNome" id="tipoNome">
				</div>		
			</div>
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="nomeFantasia">Nome Fantasia: </label>
					<input type="text" class="form-control" name="nomeFantasia" id="nomeFantasia">
				</div>
				<div class="col-md-4 mb-3">
					<label for="cnpj">CNPJ: </label>
					<input type="text" class="form-control" name="cnpj" id="cnpj"  required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="inscEstadual">Inscrição Estadual: </label>
					<input type="text" class="form-control" name="inscEstadual" id="inscEstadual"  required>
				</div>				
			</div>			
				
				<input type="submit" class="btn btn-primary" name="comando" value="Enviar"/>
				<input type="reset" class="btn btn-danger" name="comando" value="Limpar"/>
				<a href="index.php" class="btn btn-secondary m-1"><i class="fas fa-home fa-1x"></i> Home</a>
				
		</form>
	</div>	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	</body>
</html>
