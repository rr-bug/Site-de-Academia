<?php
include "conecta.inc";
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
			session_start();

			if(isset ($_POST['emailCadastro']) and isset ($_POST['nomeCadastro']) and isset ($_POST['CPFCadastro']) and isset ($_POST['estadoCadastro']) 
				and isset ($_POST['dataNascimentoCadastro']) and isset ($_POST['cidadeCadastro']) and isset 
				($_POST['loginCadastro']) and isset ($_POST['senhaCadastro']) and isset ($_POST['cSenhaCadastro']))
			{	
				$emailCadastro = $_POST['emailCadastro'];
				$nomeCadastro = $_POST['nomeCadastro'];
				$CPFCadastro = $_POST['CPFCadastro'];
				$estadoCadastro = $_POST['estadoCadastro'];
				$dataNascimentoCadastro = $_POST['dataNascimentoCadastro'];
				$cidadeCadastro = $_POST['cidadeCadastro'];
				$loginCadastro = $_POST['loginCadastro'];
				$senhaCadastro = ($_POST['senhaCadastro']);
				$cSenhaCadastro = ($_POST['cSenhaCadastro']);
				
				$_SESSION["CPFCadastro"] = $CPFCadastro;

				$sql1 = "insert into Usuarios(Login, Nome, Senha, Cidade, Estado, Email, cSenha, DataNascimento, CPF) values ('$loginCadastro', '$nomeCadastro', 
				'$senhaCadastro', '$cidadeCadastro', '$estadoCadastro', '$emailCadastro', '$cSenhaCadastro', '$dataNascimentoCadastro', $CPFCadastro)";
				$sql2 = "insert into Aluno(Usuarios_CPF, Treinador_CREF) values ($CPFCadastro, $_SESSION[CREFCadastro])";
				$resultado1 = mysqli_query($conexao,$sql1);
				$resultado2 = mysqli_query($conexao,$sql2);
				if(!$resultado1 and !$resultado2){
					echo "Falha ao inserir dados.";
				}
				else{
					header("location: ../logadoTreinador_CadastroCOISASAluno.php");
				}
			}
			?>
    </body>
</html>
<?php
  mysqli_close($conexao);
?>