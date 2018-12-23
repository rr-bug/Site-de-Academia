<?php
include "bancoPHP/conecta.inc";
	session_start();
	$perfil = isset($_SESSION['perfil']) ? $_SESSION['perfil'] : '';
	
	if ($perfil != 'Treinador'){
		header('Location: homeCadastroTreinador.php');
	}
?>
<html lang="en">
<head>
  <style>
  #meuID{
    margin-top: 0px;
  height: 600px;
}
#id2{
  margin-top: 0px;
  height: 5px;
}
</style>
  <title>Akademos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/estilo3.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
  <link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet" type="text/css">
  <link href="bootstrap/fonts/glyphicons-halflings-regular.svg" rel="stylesheet" type="text/css">
  <link href="bootstrap/fonts/glyphicons-halflings-regular.ttf" rel="stylesheet" type="text/css">
  <link href="bootstrap/fonts/glyphicons-halflings-regular.woff" rel="stylesheet" type="text/css">
  <link href="bootstrap/fonts/glyphicons-halflings-regular.woff2" rel="stylesheet" type="text/css">
  
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div id="white" class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#myPage"><img height="50px" src="imagens/logo.png"></a>
    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homeCadastroTreinador.php">Home</a></li>
        <li><a href="#band">Alunos</a></li>
		<li><a href="#band1">Treinadores</a></li>
        <li><a href="#tour">Cadastrar novo Aluno</a></li>      
        
		<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Bem vindo <?php $nome = "select * from Nome_Treinador";
							   $sqlNome = mysqli_query($conexao, $nome); 
							   $row=mysqli_fetch_assoc($sqlNome);
							   echo $row['Nome'];
						 ?> <span class="caret"></span></a>
      <ul class="dropdown-menu">
	    <li><form action="logadoTreinador_CadastroAluno_AlterarDadosTreinador_Senha.php"><button type="submit" class="btn btn-default" onClick="">Alterar Dados</button></form></li>     
	    <li><form action="homeCadastroTreinador.php"><button type="submit" class="btn btn-default" onClick="">Sair</button></form></li>		
      </ul>
    </li> 	
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
	<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div id="black" class="item active">
        <img src="imagens/personal_trainer1.jpg" alt="desempenho">
        <div id="black" class="carousel-caption">
          <h3 id="h3black">Desempenho</h3>
          <p>Cadastre seu treino.</p>
        </div>      
      </div>
      <div class="item">
        <img src="imagens/personal_trainer2.jpg" alt="exercicio">
        <div class="carousel-caption">
          <h3 id="h3">Exercícios</h3>
          <p>Avaliação Física.</p>
        </div>      
      </div>    
      <div class="item">
        <img src="imagens/personal_trainer3.jpg" alt="treinamento">
        <div class="carousel-caption">
          <h3 id="h3">Treinamento</h3>
          <p>Aproveitamento do seu treinamento.</p>
        </div>      
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
	
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div id="band" class="container text-center">
  <h3>Lista de alunos do treinador</h3>
  <p><em>Alunos cadastrados por você</em></p>
  <p>Veja abaixo a lista de todos os alunos que foram cadastrados por você</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>
						<?php 
                 $nome = "select * from Nome_Aluno";
							   $sqlNome = mysqli_query($conexao, $nome); 
							   while($nome = mysqli_fetch_array($sqlNome)){
							     echo "<a href='logadoTreinador_CadastroCOISASAluno.php'>$nome[Nome]</a><br>";
                 }
						?>
      </strong></p><br>
    </div>
  </div>
</div>

<div id="band1" class="container text-center">
  <h3>Lista de Treinadores</h3>
  <p><em>Treinadores cadastrados</em></p>
  <p>Veja abaixo a lista de todos os treinadores</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>
						<?php 
                 $nome1 = "select * from Nome_Treinador";
                 $sqlNome1 = mysqli_query($conexao, $nome1); 
                 while($nome1 = mysqli_fetch_array($sqlNome1)){
                    echo "<a href='logadoTreinador_CadastroAluno.php'>$nome1[Nome]</a><br>";
                 }
            ?>
        </strong></p><br>
    </div>    
  </div>
</div>

<div id="tour" class="bg-1">
	<div class="container" id="id2">
		<div class="page-header">
			<center><h1>Cadastro Novo Aluno</h1></center>
		</div>
	</div>
	<div class="container" id="meuID">
		<center><form action="bancoPHP/bancoCadastroAluno.php" method="post">			
		    <div class="form-group" id="id2">
				<label class="control-label col-sm-3" for="email">Email:</label>
				<div class="col-sm-8">
					<input class="form-control" id="emailCadastro" name="emailCadastro" type="email" required><br>
			     </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="text">Nome:</label>
				<div class="col-sm-8">
					<input class="form-control" id="nomeCadastro" name="nomeCadastro" type="text" required><br>
				</div>
			</div>
			<div class="form-group">
        <label class="control-label col-sm-3" for="text">CPF:</label>
        <div class="col-sm-8">
          <input class="form-control" id="CPFCadastro" name="CPFCadastro" type="number" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Estado:</label>
        <div class="col-sm-8">
          <input class="form-control" id="estadoCadastro" name="estadoCadastro" type="text" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Data Nascimento:</label>
        <div class="col-sm-8">
          <input class="form-control" id="dataNascimentoCadastro" name="dataNascimentoCadastro" type="text" required><br>
        </div>
      </div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="text">Cidade:</label>
				<div class="col-sm-8">
					<input class="form-control" id="cidadeCadastro" name="cidadeCadastro" type="text" required><br>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="text">Login:</label>
				<div class="col-sm-8">
					<input class="form-control" id="loginCadastro" name="loginCadastro" type="text" required><br>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="password">Senha:</label>
				<div class="col-sm-8">
					<input class="form-control" id="senhaCadastro" name="senhaCadastro" type="password" required><br>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="password">Confirme a senha:</label>
				<div class="col-sm-8">
					<input class="form-control" id="cSenhaCadastro" name="cSenhaCadastro" type="password" required><br>
				</div>
			</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default" onClick="">Enviar</button>
								<button type="reset" class="btn btn-default" onclick="">Limpar</button> 
							</div> 
						</div>	 
		</form></center>	
    </div>
</div>


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Design by <a>@joshuaAbbate</a>, <a>@rayanaRibeiro</a> e <a>@yasminCordeiro</a></p> 
</footer>

<script src="js/codigo.js"></script>

	</body>
</html>
<?php
  mysqli_close($conexao);
?>