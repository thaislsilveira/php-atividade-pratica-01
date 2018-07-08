<?php
require_once 'model/Cidade.php';
require_once 'model/Professor.php';
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idCidade = $_POST['idCidade'];
    $nomeCidade = $_POST['nomeCidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $salario = $_POST['salario'];
    $formacao = $_POST['formacao'];
    $escola = $_POST['escola'];

    $c1 = new Cidade($idCidade, $nomeCidade, $uf, $cep);
    $p1 = new Professor($id, $nome, $c1, $sexo,  $cpf, $rg, $salario, $formacao, $escola);
  
	$p1->calcularSalario($salario);
       
?>

<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>Listagem</title>
</head>
<body>
    <div class="risco-topo"></div>
    <div class="card-header text-center card-header-modificador">
		<h2 class="texto-principal">Lista de Professores</h2> 	
	</div>
    <div class="container"> 
    <form>
			<div class="form-row">
				<div class="col-md-1 mb-3">
					<label for="id">ID: </label>
					<input type="text" class="form-control" name="id" id="id" value="<?= $p1->getId(); ?>" disabled>
				</div>
				<div class="col-md-11 mb-3">
					<label for="nome">Nome: </label>
					<input type="text" class="form-control" name="nome" id="nome" value="<?= $p1->getNome(); ?>" disabled>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="sexo">Sexo: </label>
					<input type="text" class="form-control" name="sexo" id="sexo" value="<?= $p1->getSexo(); ?>" disabled>
				</div>
				<div class="col-md-4 mb-3">
					<label for="cpf">CPF: </label>
					<input type="text" class="form-control" name="cpf" id="cpf" value="<?= $p1->getCpf(); ?>" disabled>
				</div>
				<div class="col-md-4 mb-3">
					<label for="rg">RG: </label>
					<input type="text" class="form-control" name="rg" id="rg" value="<?= $p1->getRg(); ?>" disabled>
				</div>				
			</div>				
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="salario">Salário: </label>
					<input type="text" class="form-control" name="salario" id="salario" value="<?= $p1->getSalario(); ?>" disabled>
				</div>				
				<div class="col-md-4 mb-3">
					<label for="formacao">Formação: </label>
					<input type="text" class="form-control" name="formacao" id="formacao" value="<?= $p1->getFormacao(); ?>" disabled>
				</div>
				<div class="col-md-4 mb-3">
					<label for="escola">Escola: </label>
					<input type="text" class="form-control" name="escola" id="escola" value="<?= $p1->getEscola(); ?>" disabled>
				</div>		
			</div>		
			<h2>Cidade</h2>
			<hr>	
			<div class="form-row">					
				<div class="col-md-2 mb-3">
					<label for="idCidade">ID: </label>
					<input type="text" class="form-control" name="idCidade" id="idCidade" value="<?= $p1->getCidade()->getId(); ?>" disabled>
				</div>
				<div class="col-md-4 mb-3">
					<label for="nomeCidade">Nome: </label>
					<input type="text" class="form-control" name="nomeCidade" id="nomeCidade" value="<?= $p1->getCidade()->getNome(); ?>" disabled>
				</div>
				<div class="col-md-3 mb-3">
					<label for="uf">Estado: </label>
					<input type="text" class="form-control" name="uf" id="uf" value="<?= $p1->getCidade()->getUf(); ?>" disabled>
				</div>			
				<div class="col-md-3 mb-3">
					<label for="cep">CEP: </label>
					<input type="text" class="form-control" name="cep" id="cep" value="<?= $p1->getCidade()->getCep(); ?>" disabled>
				</div>
            </div>
            <hr>
                 <div class="form-group row">
                        <label for="calcularSalario" class="col-sm-2 col-form-label">Valor do Salário:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="calcularSalario" value="<?= $p1->getSalario(); ?>" disabled>
                    </div>
                </div>	
            <hr> 				
				<a href="op1.php" class="btn btn-secondary m-1">Voltar</a>				
		</form>      
     </div>	
    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
