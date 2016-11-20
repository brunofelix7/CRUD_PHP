<?php

	include_once("conexao.php");
	
	function select(){
		$contato = array();
		conectarDB();
		$sql = "SELECT * FROM musicas";
		$result = mysql_query($sql);
		while($contato = mysql_fetch_assoc($result)){
			$contatos[] = $contato;
		}
		fecharDB();
		return $contatos;
	}
	