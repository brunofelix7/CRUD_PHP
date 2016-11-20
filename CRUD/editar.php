<?php
    include_once("conexao.php");
?>
<html lang="pt-br">
<head>
    <title>CRUD em PHP</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="JavaScript/funcoes.js"></script>
    <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
    <?php
        $id = filter_input(INPUT_GET, "id");
        $nome = filter_input(INPUT_GET, "nome");
        $album = filter_input(INPUT_GET, "album");
        $ano = filter_input(INPUT_GET, "ano");
    ?>
</head>
    <body>
    <div class="alterar">
        <h2 style="color: white">Atualizar Dados</h2><br/>
            <form action="alterar.php" method="GET">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                <article style='color: white'>Novo Nome:</article>
                <input required="required" type=text name="nome" class="form-control" id="inputdefault" value="<?= $nome ?>"/><br/>
                <article style='color: white'>Novo Album:</article>
                <input required="required" type=text name="album" class="form-control" id="inputdefault" value="<?= $album ?>"/><br/>
                <article style='color: white'>Novo Ano:</article>
                <input required="required" type=text name="ano" class="form-control" id="inputdefault" value="<?= $ano ?>" maxlength="4" size="4" pattern= "\d*" title= "Apenas números são permitidos"/><br/>
                <input type="submit" class="btn btn-primary btn-sm" value="Atualizar"/>
                <a href="index.php" class="btn btn-default btn-sm">Voltar</a>
            </form>
    </div>
    </body>
</html>
