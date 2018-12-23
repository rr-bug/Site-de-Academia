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
<script>
function enviado1(){
	if(document.getElementById('peso').value != "" && document.getElementById('altura').value!= ""){
		alert("Enviado com Sucesso");
	}
	else
	{
		alert("Campo Vazio");
	}
}
</script>
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
		<li><a href="#avaliacao">Sua Avaliação</a></li>      
		<li><a href="#treino">Seu Treino</a></li>      
		<li><a href="#exercicio">Seus Exercícios</a></li>      
		<li><a href="#treinos_exercicios">TREINOS EXERÍCIOS</a></li>      
        <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Bem vindo <?php $nome = "select * from Nome_Treinador";
							   $sqlNome = mysqli_query($conexao, $nome); 
							   $row=mysqli_fetch_assoc($sqlNome);
							   echo $row['Nome'];
						 ?> <span class="caret"></span></a>
      <ul class="dropdown-menu">
	  <li><form action="bancoPHP/bancoTreinadorExcluiAluno.php"><button type="submit" class="btn btn-default" onClick="">Deletar Aluno</button></form></li>
        <li><form action="logadoTreinador_CadastroAluno_AlterarDados.php"><button type="submit" class="btn btn-default" onClick="">Alterar Dados</button></form></li>     
	    <li><form action="logadoTreinador_CadastroAluno_AlterarDados.php"><button type="submit" class="btn btn-default" onClick="">Sair</button></form></li>		
      </ul>
    </li> 	
      </ul>
    </div>
  </div>
</nav>



<div id="band" class="container text-center">
  <br><p>Faça os treinos e as avaliações de seu aluno</p>
  <br>
  <div class="row">    
  <div class="col-sm-4"></div>
    <div class="col-sm-4">	
      <p class="text-center"><strong><?php $nome = "select Nome from Usuarios inner join Aluno on Usuarios.CPF = Aluno.Usuarios_CPF";
							   $sqlNome = mysqli_query($conexao, $nome); 
							   $row=mysqli_fetch_assoc($sqlNome);
							   echo $row['Nome'];
						 ?></strong></p><br>				  
        <img id="tamanhoIMG" src="imagens/pessoa3.jpg" class="img-circle person" alt="Random Name">      
    </div>    
	<div class="col-sm-12"></div>
  </div>
</div>


<div id="avaliacao" class="bg-1 tamanho" >
	<div class="container" id="id2">
		<div class="page-header">
			<center><h1>Sua Avaliação</h1></center>
		</div>
	</div>
	<div class="container" id="meuID">
		<center><form id="avaliacao" name="avaliacao" action="bancoPHP/.php" method="post">			
		    <div class="form-group" id="id2">
				<label class="control-label col-sm-3" for="text">VO2:</label>
				<div class="col-sm-8">
					<input class="form-control" id="vo2" name="vo2" type="number" required><br>
			     </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="text">Frequencia Máxima:</label>
				<div class="col-sm-8">
					<input class="form-control" id="frequencia_maxima" name="frequencia_maxima" type="number" required><br>
				</div>
			</div>
			<div class="form-group">
        <label class="control-label col-sm-3" for="text">Zona Alvo:</label>
        <div class="col-sm-8">
          <input class="form-control" id="zona_alvo" name="zona_alvo" type="number" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Peso:</label>
        <div class="col-sm-8">
          <input class="form-control" id="peso" name="peso" type="double" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Altura:</label>
        <div class="col-sm-8">
          <input class="form-control" id="altura" name="altura" type="double" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Percentual Gordura:</label>
        <div class="col-sm-8">
          <input class="form-control" id="percentual_gordura" name="percentual_gordura" type="double" required><br>
        </div>
      </div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="text">Indice Muscular:</label>
				<div class="col-sm-8">
					<input class="form-control" id="indice_muscular" name="indice_muscular" type="double" required><br>
				</div>
        <div class="form-group">
        <label class="control-label col-sm-3" for="text">Data:</label>
        <div class="col-sm-8">
          <input class="form-control" id="data" name="data" type="text" required><br>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-3" for="text">Horario:</label>
        <div class="col-sm-8">
          <input class="form-control" id="horario" name="horario" type="text" >
        </div>
			</div>		
				<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<br><button type="submit" class="btn btn-default" onClick="">Enviar</button>
								<button type="reset" class="btn btn-default" onclick="">Limpar</button> 
							</div> 
				</div>	 			
		</form></center>	
    </div>
</div>

<div id="treino" class="container text-center">
  <br><div class="page-header">
			<center><h1>Seus Treinos</h1></center>
		</div>
  <br>
  <div class="container" id="meuID">
		<center><form id="treinos" name="treinos" action="bancoPHP/.php" method="post">			
		    <div class="form-group" id="id2">
				<label class="control-label col-sm-3" for="text">Data Início:</label>
				<div class="col-sm-8">
					<input class="form-control" id="dataInicio" name="dataInicio" type="text" required><br>
			     </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="text">Objetivo:</label>
				<div class="col-sm-8">
					<input class="form-control" id="objetivo" name="objetivo" type="text" required><br>
				</div>
			</div>
			<div class="form-group">
        <label class="control-label col-sm-3" for="text">Frequencia Semanal:</label>
        <div class="col-sm-8">
          <input class="form-control" id="frequencia_semanal" name="frequencia_semanal" type="number" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Número de Treinos Realizados:</label>
        <div class="col-sm-8">
          <input class="form-control" id="nTreinosRealizados" name="nTreinosRealizados" type="number" required><br>
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

<div id="treinos_exercicios" class="bg-1 tamanho" >
	<div class="container" id="id2">
		<div class="page-header">
			<center><h1>Anote seus treinos nos exercícos</h1></center>
		</div>
	</div>
	<div class="container" id="meuID">
<center><form id="treinos_exercicios" name="treinos_exercicios" action="bancoPHP/.php" method="post">     
        <div class="form-group" id="id2">
        <label class="control-label col-sm-3" for="text">Data Treino:</label>
        <div class="col-sm-8">
          <input class="form-control" id="dataTreino" name="dataTreino" type="text" required><br>
           </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Quantidade de Séries:</label>
        <div class="col-sm-8">
          <input class="form-control" id="quantidade_series" name="quantidade_series" type="number" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Repeticoes:</label>
        <div class="col-sm-8">
          <input class="form-control" id="repeticoes" name="repeticoes" type="number" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Carga:</label>
        <div class="col-sm-8">
          <input class="form-control" id="carga" name="carga" type="double" required><br>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Tempo de Pausa:</label>
        <div class="col-sm-8">
          <input class="form-control" id="tempoPausa" name="tempoPausa" type="text" required><br>
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

<div id="exercicio" class="container text-center">
  <br><div class="page-header">
			<center><h1>Seus Exercícios</h1></center>
		</div>
  <br>
  <div class="container" id="meuID">		
    <center><form id="exercicios" name="exercicios" action="bancoPHP/.php" method="post">             
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Nome:</label>
        <div class="col-sm-8">
          <input class="form-control" id="nome" name="nome" type="text" required><br>
        </div>
      </div>      
      <div class="form-group">
        <label class="control-label col-sm-3" for="text">Musculos Trabalhados:</label>
        <div class="col-sm-8">
          <input class="form-control" id="musculos_trabalhados" name="musculos_trabalhados" type="text" required><br>
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