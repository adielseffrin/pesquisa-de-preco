<?php

	require '../privado/consulta.php';

?>
<html lang="pt-br">
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pesquisa de preço</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
</head>
<body>
    <h3 id="titulo">Pesquisa de preço</h3>
	<nav class="navbar navbar-light bg-light">
    	<div class="container">
		<div>
	</nav>
		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a id="animacao" href="index.php">Cadastrar produtos</a></li>
                        <li class="list-group-item"><a href="pesquisa.php">Pesquisa</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Cadastro de produtos</h4>
								<hr/>

			<form method="post" action="../privado/inserir.php">
				<div class="form-group">
					<label>Código do produto:</label>
						<input type="number" class="form-control" name="codigo" placeholder="Código"><br>
					<label>Descrição do produto:</label>
						<input type="text" class="form-control" name="descricao" placeholder="Descrição"><br>
    				<button class="btn btn-success">Cadastrar</button><br/>
    			</div>  
			</form><br/>
				<h4>Seleção de produtos</h4><br/>

			<form method="POST" action="../privado/selecao.php">     
				<? foreach($resultado as $indice => $dbaselec) { ?>		   
	    			<div class="form-check">
            			<input class="form-check-input" type="checkbox" name="checkbox[]" value="<?= $dbaselec->id?>" id="defaultCheck1"><?= $dbaselec->descricao ?>
        			</div>
				<? } ?><br/>
        				<button class="btn btn-success" name="selecao">Selecionar</button><br/><br/>
       		</form>
			<form method="POST" action="../privado/pesquisa.php"> 


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>