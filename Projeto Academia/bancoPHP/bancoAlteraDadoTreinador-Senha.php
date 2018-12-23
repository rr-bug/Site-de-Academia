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

         	if(isset ($_POST['senhaAltera']) and isset ($_POST['cSenhaAltera']))
			{
				$senhaAltera = ($_POST['senhaAltera']);
				$cSenhaAltera = ($_POST['cSenhaAltera']);
			
				$sql1 = "update Usuarios set Senha = '$senhaAltera' where Usuarios.CPF = $_SESSION[CPFCadastro]";
				$resultado1 = mysqli_query($conexao,$sql1);
				if(!$resultado1){
					echo "Falha ao alterar dados.";
				}
				else{		
					echo "alterou";				 	
					header("location: ../logadoTreinador_CadastroAluno.php");
				}
			}			
		?>
    </body>
</html>
<?php
  mysqli_close($conexao);
?>