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
                        <li class="list-group-item"><a href="index.php">Cadastrar produtos</a></li>
                        <li class="list-group-item"><a href="pesquisa.php">Pesquisa</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
					<!---->
            <div class="col">
<hr />
	<form method="POST" action="../privado/pesquisa.php">  
		
		<? foreach($resultado as $indice => $dbaselec) { ?>
			<? if($dbaselec->id_status == 2) { ?>
				<label for="fname"><?= $dbaselec->descricao?></label><br>
 	 			<input type="number" name="pesquisa[]" id="fname" style="width:70px; "><br>

		  	<? } ?>
		  <? } ?><br/>
		  <button class="btn btn-success" name="enviar_pesquisa">Enviar pesquisa</button>
		  <button class="btn btn-success" name="nova_pesquisa">Nova pesquisa</button><br/>
    </form>
		
		
              </div>
              	
            </div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html> 