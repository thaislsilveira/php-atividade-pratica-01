
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>Cadastro</title>
</head>
<body>
	<div class="risco-topo"></div>
	<div class="card-header text-center card-header-modificador">
		<h2  align="center"> Cadastro de Advogados </h2>
	</div>
<div class="container">		
		<hr>
		<form method="post" action="processarAdvogado.php">
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
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="sexo">Sexo: </label>
					<input type="text" class="form-control" name="sexo" id="sexo">
				</div>
				<div class="col-md-4 mb-3">
					<label for="cpf">CPF: </label>
					<input type="text" class="form-control" name="cpf" id="cpf">
				</div>
				<div class="col-md-4 mb-3">
					<label for="rg">RG: </label>
					<input type="text" class="form-control" name="rg" id="rg">
				</div>				
			</div>				
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="salario">Salário: </label>
					<input type="text" class="form-control" name="salario" id="salario">
				</div>				
				<div class="col-md-4 mb-3">
					<label for="oab">OAB: </label>
					<input type="text" class="form-control" name="oab" id="oab">
				</div>
				<div class="col-md-4 mb-3">
					<label for="valorConsulta">Valor da Consulta: </label>
					<input type="text" class="form-control" name="valorConsulta" id="valorConsulta">
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
				<input type="submit" class="btn btn-primary" name="comando" value="Enviar"/>
				<input type="reset" class="btn btn-danger" name="comando" value="Limpar"/>
				<a href="index.php" class="btn btn-secondary m-1"><i class="fas fa-home fa-1x"></i> Home</a>
				
		</form>
	</div>	
	</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</html>
