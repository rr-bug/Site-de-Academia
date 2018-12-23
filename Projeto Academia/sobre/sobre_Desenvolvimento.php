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
	.tamanho {
		height: 850px;
	}
	#tamanhoIMG{
		height: 40%;
	}
   </style>
   <script>
	function enviado() {		
		nome = document.getElementById('nomeContato').value;
		email = document.getElementById('emailContato').value;
		comentario = document.getElementById('comentariosContato').value;
			
		if ((nome != "") && (email != "") && (comentario != ""))
		{
			alert("Sua mensagem foi enviada com sucesso!");
		}
		else
		{
			alert("Tente enviar novamente a mensagem!");	
		}
	}		
	
	function confirmarSenha(){
		senha1 = document.getElementById('senhaCadastro').value;
		senha2 = document.getElementById('cSenhaCadastro').value;
 
		if (senha1 != senha2)
		{
			alert("Senhas Diferentes!");
		}
		else
		{	
			document.getElementById("CadastroTreinador").submit();
		}						
	}						
   </script>
  
  <title>Akademos</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/estilo3.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
  <link href="../bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet" type="text/css">
  <link href="../bootstrap/fonts/glyphicons-halflings-regular.svg" rel="stylesheet" type="text/css">
  <link href="../bootstrap/fonts/glyphicons-halflings-regular.ttf" rel="stylesheet" type="text/css">
  <link href="../bootstrap/fonts/glyphicons-halflings-regular.woff" rel="stylesheet" type="text/css">
  <link href="../bootstrap/fonts/glyphicons-halflings-regular.woff2" rel="stylesheet" type="text/css">
  
  <script src="../bootstrap/jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div id="white" class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img height="50px" src="../imagens/logo.png"></a>
    </div>
	<div>
		<form action="bancoPHP/bancoLoginAluno-Treinador.php" method="post" class="navbar-form pull-right">
            <input class="form-control" id="nomeLogin" name="nomeLogin" type="login" placeholder="Login" required>
            <input class="form-control" id="senhaLogin" name="senhaLogin" type="password" placeholder="Senha" required>
            <button type="submit" class="btn">Entrar</button>
        </form>
	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homeCadastroTreinador.php">HOME</a></li>
        <li><a href="#sobre">SOBRE</a></li>
        <li><a href="#cadastro">CADASTRO</a></li>
        <li><a href="#contato">CONTATO</a></li>        
        <li><a>LOGIN</a></li>
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
        <img src="../imagens/img3.jpg" alt="desempenho">
        <div id="black" class="carousel-caption">
          <h3 id="h3black">Desempenho</h3>
          <p>Cadastre seu treino.</p>
        </div>      
      </div>
      <div class="item">
        <img src="../imagens/img1.jpg" alt="exercicio">
        <div class="carousel-caption">
          <h3 id="h3">Exercícios</h3>
          <p>Avaliação Física.</p>
        </div>      
      </div>    
      <div class="item">
        <img src="../imagens/img2.jpg" alt="treinamento">
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

<div id="sobre" class="container text-center">
  <h3>SOBRE</h3>
  <p><em>Venha para o mundo fitness!</em></p>
  <p>Conheça os serviços do nosso sistema online, onde é possível através de um cadastro efetuar uma avaliação física,
    cadastrar o seu treinamento e apartir disso acompanhar o seu desenvolvimento. Pense em uma vida saudável e acompanhe os
    seus resultados e objetivos através de uma plataforma online onde seus treinos estarão guardados para que você possa
    se exercitar em qualquer lugar!</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <a href="sobre/sobre_Avaliacao.php"><p class="text-center"><strong>Avaliação Física</strong></p><br>
        <img id="tamanhoIMG" src="../imagens/avaliacao.png" class="img-circle person" alt="Random Name" width="255" height="255"></a>
      <div id="avaliacao" class="collapse">
        <p>Consulte a sua avaliação física online.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="sobre/sobre_Desenvolvimento.php"><p class="text-center"><strong>Desenvolvimento dos treinos</strong></p><br>
        <img id="tamanhoIMG" src="../imagens/desenvolvimento.jpg" class="img-circle person" alt="Random Name" width="255" height="255"></a>
      <div id="desenvolvimento" class="collapse">
        <p>Acompanhe a evolução dos seus treinos.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="sobre/sobre_Treinos.php"><p class="text-center"><strong>Treinamento</strong></p><br>
        <img id="tamanhoIMG" src="../imagens/treinamento.jpg" class="img-circle person" alt="Random Name" width="255" height="255"></a>
      <div id="treinamento" class="collapse">
        <p>Tenha acesso aos seus treinos em qualquer lugar.</p>
      </div>
    </div>
  </div>
</div>

<div id="cadastro" class="bg-1 tamanho" >
	<div class="container" id="id2">
		<div class="page-header">
			<center><h1>Cadastro Treinador</h1></center>
		</div>
	</div>
	<div class="container" id="meuID">
		<center><form id="CadastroTreinador" name="CadastroTreinador" action="bancoPHP/bancoCadastroTreinador.php" method="post">			
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
        <label class="control-label col-sm-3" for="text">CREF:</label>
        <div class="col-sm-8">
          <input class="form-control" id="CREFCadastro" name="CREFCadastro" type="number" required><br>
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
								<button type="button" class="btn btn-default" onClick="confirmarSenha();">Enviar</button>
								<button type="reset" class="btn btn-default" onclick="">Limpar</button> 
							</div> 
						</div>	 			
		</form></center>	
    </div>
</div>

<div id="contato" class="container">
  <h3 class="text-center">Contato</h3>
  
  <div class="row">
    <div class="col-md-4">
      <p>Algum problema,sugestão? Mande um email.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bahia, BR</p>
      <p><span class="glyphicon glyphicon-phone"></span> Tel.: +55 3288-6686</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: akademos.academia@gmail.com</p>	   
    </div>
    <form method="post">
	<div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nomeContato" name="nomeContato" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="emailContato" name="emailContato" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comentariosContato" name="comentariosContato" placeholder="Comentários" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" onClick="enviado();">Enviar</button>		  
        </div>
      </div>	
    </div>
	</form>
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
