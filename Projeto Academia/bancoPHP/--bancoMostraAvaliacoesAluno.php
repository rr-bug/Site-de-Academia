<?php
include "conecta.inc";
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php

			$emailCadastro = "";
			$nomeCadastro = "";
			$CPFCadastro = "";
			$CREFCadastro = "";
			$estadoCadastro = "";
			$dataNascimentoCadastro = "";
			$cidadeCadastro = "";
			$loginCadastro = "";
			$senhaCadastro = "";
			$cSenhaCadastro = "";
			
			if(isset ($_POST['emailCadastro']) and isset ($_POST['nomeCadastro']) and isset ($_POST['CPFCadastro']) and isset ($_POST['CREFCadastro']) 
				and isset ($_POST['estadoCadastro']) and isset ($_POST['dataNascimentoCadastro']) and isset ($_POST['cidadeCadastro']) and isset 
				($_POST['loginCadastro']) and isset ($_POST['senhaCadastro']) and isset ($_POST['cSenhaCadastro']))
			{	
				$emailCadastro = $_POST['emailCadastro'];
				$nomeCadastro = $_POST['nomeCadastro'];
				$CPFCadastro = $_POST['CPFCadastro'];
				$CREFCadastro = $_POST['CREFCadastro'];
				$estadoCadastro = ($_POST['estadoCadastro']);
				$dataNascimentoCadastro = $_POST['dataNascimentoCadastro'];
				$cidadeCadastro = $_POST['cidadeCadastro'];
				$loginCadastro = $_POST['loginCadastro'];
				$senhaCadastro = md5($_POST['senhaCadastro']);
				$cSenhaCadastro = md5($_POST['cSenhaCadastro']);
				
				$sql1 = "insert into Usuarios(Nome, Senha, Cidade, Estado, Email, cSenha, DataNascimento, CPF, Login) values ($nomeCadastro, 
				$senhaCadastro, $cidadeCadastro, $estadoCadastro, $emailCadastro, $cSenhaCadastro, $dataNascimentoCadastro, $CPFCadastro, $loginCadastro)";
				$sql2 = "insert into Treinador(CREF, CPF_Usuario) values ($CREFCadastro, $loginCadastro)";
				$resultado1 = mysql_query($sql1,$conect);
				$resultado2 = mysql_query($sql2,$conect);
				if(!$resultado1 and !$resultado2){
					echo “Falha ao executar o comando: “ . mysql_error();
				}
				else{
					echo "Dados inseridos com sucesso."; 
				}
			}
			?>
    </body>
</html>
<?php
  mysqli_close($conexao);
?>