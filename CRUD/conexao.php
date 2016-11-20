<?php
    
	//Função conecta a base de dados
    function conectarDB(){
		$conexao = mysql_connect("localhost", "root", "Oni@2015");
		if(!$conexao){
		  die("Erro ao conectar") . mysql_error();
		}
		$banco = mysql_select_db("agenda", $conexao);
		if(!$banco){
		  die("Error ao selecionar o banco") . mysql_error();
		}
	}
	
	function fecharDB(){
		mysql_close();
	}
    
