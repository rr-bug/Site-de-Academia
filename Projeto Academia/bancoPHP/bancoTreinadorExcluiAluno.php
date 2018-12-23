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

				//$sql1 = "delete * from Usuarios inner join Aluno on Usuarios.CPF = Aluno.Usuario_CPF";
				$sql1 = "delete from Usuarios where Usuarios.CPF = $_SESSION[CPFCadastro]";
				$sql2 = "delete from Aluno where Aluno.Usuarios_CPF = $_SESSION[CPFCadastro]";
				$resultado1 = mysqli_query($conexao,$sql1);
				$resultado2 = mysqli_query($conexao,$sql2);
				if(!$resultado1 and !$resultado2){
					echo "Falha ao deletar dados do aluno.";
				}
				else{
					header("location: ../logadoTreinador_CadastroAluno.php");
				}
			
			?>
    </body>
</html>
<?php
  mysqli_close($conexao);
?>