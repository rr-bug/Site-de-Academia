<?php	
	$nomeContato = 0;
	$emailContato = 0;
	$comentariosContato = 0;
	
	if(isset ($_POST['nomeContato']) and isset ($_POST['emailContato']) and isset ($_POST['comentariosContato']))
	{
		$nomeContato = $_POST['nomeContato'];
		$emailContato = $_POST['emailContato'];
		$comentariosContato = $_POST['comentariosContato'];
		
		echo "Seu nomeContato: ".$nomeContato = $_POST['nomeContato'];
		echo "Seu emailContato: ".$emailContato = $_POST['emailContato'];
		echo "Seus comentariosContato: ".$comentariosContato = $_POST['comentariosContato'];
	}
?>