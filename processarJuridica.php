<?php
require_once 'model/Cidade.php';
require_once 'model/Tipo.php';
require_once 'model/PessoaJuridica.php';
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idCidade = $_POST['idCidade'];
    $nomeCidade = $_POST['nomeCidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $cnpj = $_POST['cnpj'];
    $nomeFantasia = $_POST['nomeFantasia'];
    $inscEstadual = $_POST['inscEstadual'];
    $tipoId = $_POST['tipoId'];
    $tipoNome = $_POST['tipoNome'];  

    $c3 = new Cidade( $idCidade,$nomeCidade, $uf,  $cep);
    $t3 = new Tipo( $tipoId, $tipoNome);
    $p3 = new PessoaJuridica($id, $nome, $c3,$nomeFantasia,$cnpj, $inscEstadual, $t3);
    $p3->calcularImposto(50);
    
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
		<h2 class="texto-principal">Lista de Pessoa Jurídica</h2> 	
	</div>
	<div class="container">    
    <form>
             <div class="form-row">
				<div class="col-md-1 mb-3">
					<label for="id">ID: </label>
					<input type="text" class="form-control" name="id" id="id" value="<?= $p3->getId(); ?>" disabled>
				</div>
				<div class="col-md-11 mb-3">
					<label for="nome">Nome: </label>
					<input type="text" class="form-control" name="nome" id="nome" value="<?= $p3->getNome(); ?>" disabled>
				</div>
			</div>
        <h2>Cidade</h2>
        <hr>	
        <div class="form-row">					
            <div class="col-md-2 mb-3">
                <label for="idCidade">ID: </label>
                <input type="text" class="form-control" name="idCidade" id="idCidade"  value="<?= $p3->getCidade()->getId();?>" disabled >
            </div>
            <div class="col-md-4 mb-3">
                <label for="nomeCidade">Nome: </label>
                <input type="text" class="form-control" name="nomeCidade" id="nomeCidade" value="<?= $p3->getCidade()->getNome(); ?>" disabled>
            </div>
            <div class="col-md-3 mb-3">
                <label for="uf">Estado: </label>
                <input type="text" class="form-control" name="uf" id="uf" value="<?= $p3->getCidade()->getUf(); ?>" disabled>
            </div>			
            <div class="col-md-3 mb-3">
                <label for="cep">CEP: </label>
                <input type="text" class="form-control" name="cep" id="cep" value="<?= $p3->getCidade()->getCep(); ?>" disabled>
            </div>
        </div>			
        <h2>Tipo</h2>
        <hr>	
        <div class="form-row">				
            <div class="col-md-6 mb-3">
                <label for="tipoId">ID: </label>
                <input type="text" class="form-control" name="tipoId" id="tipoId"   value="<?= $p3->getTipo()->getId(); ?>" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="tipoNome">Nome: </label>
                <input type="text" class="form-control" name="tipoNome" id="tipoNome" value="<?= $p3->getTipo()->getNome(); ?>" disabled>
            </div>		
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="nomeFantasia">Nome Fantasia: </label>
                <input type="text" class="form-control" name="nomeFantasia" id="nomeFantasia" value="<?= $p3->getNomeFantasia(); ?>" disabled>
            </div>
            <div class="col-md-4 mb-3">
                <label for="cnpj">CNPJ: </label>
                <input type="text" class="form-control" name="cnpj" id="cnpj"  value="<?= $p3->getCnpj(); ?>" disabled>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inscEstadual">Inscrição Estadual: </label>
                <input type="text" class="form-control" name="inscEstadual" id="inscEstadual"   value="<?= $p3->getInscEstadual(); ?>" disabled>
            </div>				
        </div>			 
        <hr>
            <div class="form-group row">
                 <label for="calcularImposto" class="col-sm-2 col-form-label">Valor do Imposto:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="calcularImposto" value="<?= $p3->calcularImposto() ?>" disabled>
                    </div>
            </div>	
        <hr> 				
			<a href="index.php" class="btn btn-secondary m-1">Voltar</a>				
	</form>   		
    </div>	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	</body>
</html>
