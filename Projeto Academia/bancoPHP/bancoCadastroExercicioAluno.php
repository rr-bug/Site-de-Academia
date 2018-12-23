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
			
			if(isset ($_POST['peso']) and isset ($_POST['altura']))
			{	
				$VO2 = $_POST['VO2'];
				$Frequencia_Maxima = $_POST['Frequencia_Maxima'];
				$Zona_Alvo = $_POST['Zona_Alvo'];
				$peso = $_POST['peso'];
				$altura = $_POST['altura'];
				$Percentual_Gordura = $_POST['Percentual_Gordura'];
				$Indice_Muscular = $_POST['Indice_Muscular'];
				$Data = $_POST['Data'];
				$Horario = $_POST['Horario'];
				
				$sql2 = "insert into Avaliacao_Fisica(VO2, Frequencia_Maxima, Zona_Alvo,Peso,Altura,Percentual_Gordura,Indice_Muscular,Data,Horario) 
				values ($VO2, $Frequencia_Maxima, $Zona_Alvo,$peso, $altura, $Percentual_Gordura, $Indice_Muscular,'$Data',$Horario)";
				$resultado2 = mysqli_query($conexao,$sql2);
				if(!$resultado2){
					echo "Falha ao executar o comando: " . mysql_error();
				}
				else{
					header("location: ../logadoTreinador_CadastroAvaliacaoAluno.php");
				}
			}
			?>
    </body>
</html>
<?php
  mysqli_close($conexao);
?>