<?php
include "bancoPHP/conecta.inc";
session_start();	
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
#tamanhoIMG{
		height: 40%;
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img height="50px" src="imagens/logo.png"></a>
    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="homeCadastroTreinador.php">Home</a></li>
		<li><a href="#band">Perfil</a></li>
        
		<li><a href="#treino">Seu Treino</a></li>      
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Bem vindo <?php $nome = "select * from Nome_Aluno";
							   $sqlNome = mysqli_query($conexao, $nome); 
							   $row=mysqli_fetch_assoc($sqlNome);
							   echo $row['Nome'];
						 ?> <span class="caret"></span></a>
      <ul class="dropdown-menu">
	  <li><form action="logadoTreinador_CadastroAluno_AlterarDadosAluno_Senha.php"><button type="submit" class="btn btn-default" onClick="">Alterar Dados</button></form></li>     
	    <li><form action="homeCadastroTreinador.php"><button type="submit" class="btn btn-default" onClick="">Sair</button></form></li>		
      </ul>
    </li> 	
      </ul>
    </div>
  </div>
</nav>



<div id="band" class="container text-center">
  <h3><?php $nome = "select Nome from Usuarios inner join Aluno on Usuarios.CPF = Aluno.Usuarios_CPF";
							   $sqlNome = mysqli_query($conexao, $nome); 
							   $row=mysqli_fetch_assoc($sqlNome);
							   echo $row['Nome'];
						 ?></h3>
  <p>Veja abaixo a lista de todas suas avaliações e treinos</p>
  <br>
  <div class="row">    
  <div class="col-sm-4"></div>
    <div class="col-sm-4">      		
		<img id="tamanhoIMG" src="imagens/pessoa3.jpg" class="img-circle person" alt="Random Name">      
    </div>    
	<div class="col-sm-12"></div>
  </div>
</div>

<div id="treino" class="bg-1">
	<div class="container" id="id2">
		<div class="page-header">
			<center><h1>Seu Treino</h1></center>
		</div>
	</div>
	<center><div class="col-sm-4">
			<p>IMC</p>
    </div></center>
	<center><div class="col-sm-4">
			<p>Gordura</p>
    </div></center>
	<center><div class="col-sm-4">
			<p>AVC</p>
    </div></center>
</div>


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Design by <a>@joshuaAbbate</a> e <a>@rayanaRibeiro</a></p> 
</footer>

<script src="js/codigo.js"></script>

	</body>
</html>