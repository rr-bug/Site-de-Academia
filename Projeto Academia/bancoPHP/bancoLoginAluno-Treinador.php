<?php
include "conecta.inc";
	session_start();		

	if(isset ($_POST['nomeLogin']) and isset ($_POST['senhaLogin']))
	{		
		$nomeLogin = strip_tags($_POST['nomeLogin']);
		$senhaLogin = strip_tags($_POST['senhaLogin']);
		
		if(empty($nomeLogin) || empty($senhaLogin)){
			echo "Preencha todos os campos!";
		}else{
			$selecionar = mysqli_query($conexao, "select * from Usuarios where Login = '$nomeLogin' and Senha = '$senhaLogin'");						
			$conta = mysqli_num_rows($selecionar);
			
			if($conta <= 0){
				echo "Nome ou Senha estão errados!";
			}else{
				while($res = mysqli_fetch_array($selecionar)){
					$_SESSION['nomeLogin'] = $res['Login'];
					$_SESSION['senhaLogin'] = $res['Senha'];
						
						$selecionar1 = mysqli_query($conexao, "select * from Usuarios inner join Treinador on Usuarios.CPF = Treinador.Usuarios_CPF and Usuarios.Login = '$nomeLogin'");
						$conta1 = mysqli_num_rows($selecionar1);
				
						if($conta1 > 0){
								session_start();		
								$_SESSION['perfil'] = 'Treinador';
								header("location: ../logadoTreinador_CadastroAluno.php");
							
						} else{
								$selecionar2 = mysqli_query($conexao, "select * from Usuarios inner join Aluno on Usuarios.CPF = Aluno.Usuarios_CPF	and Usuarios.Login = '$nomeLogin'");
								$conta2 = mysqli_num_rows($selecionar2);
				
							if($conta2 >0){
							session_start();
									$_SESSION['perfil'] = 'Aluno';
									header("location: ../logadoAluno_SuasAvaliacoes.php");									
							
						}
						}						
				}
			}
		}
	}	
	
mysqli_close($conexao);
?>