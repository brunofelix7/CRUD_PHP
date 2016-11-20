<?php

	include_once("conexao.php");

	conectarDB();

	$nome = $_POST['nome'];
	$album = $_POST['album'];
	$ano = $_POST['ano'];
	
	if(!empty($nome) || !empty($album) || !empty($ano)){
		echo "Preencha os campos";
	}
	
	$sql = "INSERT INTO musicas(nome, album, ano) VALUES('$nome', '$album', '$ano')";
	$result = mysql_query($sql);
	fecharDB();
	
	header("Location: index.php");
	

?>