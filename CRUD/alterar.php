<?php

    include_once("conexao.php");
    
    conectarDB();
    $id = filter_input(INPUT_GET, "id");
    $nome = filter_input(INPUT_GET, "nome");
    $album = filter_input(INPUT_GET, "album");
    $ano = filter_input(INPUT_GET, "ano");

    $sql = mysql_query("UPDATE musicas SET nome= '$nome', album= '$album', ano= '$ano' WHERE id='$id';");
    fecharDB();

    header("Location: index.php");
    

?>
