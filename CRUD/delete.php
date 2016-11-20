<?php

    include_once("conexao.php");
    
    function delete($i){
        conectarDB();
        $sql = "DELETE FROM musicas WHERE id=".$i;
        $result = mysql_query($sql);
        fecharDB();
        header("Location: index.php");
    }
    
    if($_POST){
        $id = $_POST['id'];
        delete($id);
    }
   
   