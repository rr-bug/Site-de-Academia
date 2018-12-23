<?php
$conexao = mysqli_connect('localhost', 'root', '', 'banco_projeto_academia');
if (!$conexao){
    die("Error: ".  mysql_connect_error());
}
//$db = mysql_select('banco_projeto_academia');
//if(!$db){
//	echo 'Não foi possível selecionar a base de dados ' . mysql_error(); 
//}
//mysql_close($conexao);
?>