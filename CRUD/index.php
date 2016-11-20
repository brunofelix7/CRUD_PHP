<?php
    include_once("conexao.php");
    include_once("select.php");
    include_once("delete.php");
?>
<html lang="pt-br">
<head>
    <title>CRUD em PHP</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="JavaScript/funcoes.js"></script>
    <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
</head>
<body>

    <h1 class="a">Músicas Favoritas [LP]</h1>
    <br/>
    
    <div class="container">
        
    </div>
    
    <!-- Small modal -->
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">Cadastrar Nova</button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <span class="close">x</span>
                <form action="cadastrar.php" method="POST">
                    Nome:<br/><input required="required" type=text class="form-control" id="inputdefault" name="nome"/>
                    Album:<br/><input required="required" type=text class="form-control" id="inputdefault" name="album"/>
                    Ano:<br/><input required="required" type=text class="form-control" id="inputdefault" name="ano" maxlength="4" size="4" pattern= "\d*" title= "Apenas números são permitidos"/><br/>
                    <input type="submit" class="btn btn-primary btn-sm" value="Incluir"/>
                </form>
            </div>
          </div>
        </div>
    <br/>
    <br/>
    
    <table class="table">
        <thead class="b">
            <tr>
                <td><strong style="color: white">Código</strong></td>
                <td><strong style="color: white">Nome</strong></td>
                <td><strong style="color: white">Album</strong></td>
                <td><strong style="color: white">Ano</strong></td>
                <td><strong style="color: white">Editar</strong></td>
                <td><strong style="color: white">Excluir</strong></td>
            </tr>
        </thead>
        <tbody class="b">
            <?php
                $contatos = select();
                foreach($contatos as $contato){
                    echo "<tr>";
                    echo "<td><article style='color: white'>".$contato['id']."</article></td>";
                    echo "<td><article style='color: white'>".$contato['nome']."</article></td>";
                    echo "<td><article style='color: white'>".$contato['album']."</article></td>";
                    echo "<td><article style='color: white'>".$contato['ano']."</article></td>";
            ?>      

                    <td class="a">
                            <a class="btn btn-primary btn-sm" href="<?php echo "editar.php?id=" . $contato['id'] . "&nome=" . $contato['nome'] . "&album=" . $contato['album'] . "&ano=" . $contato['ano']?>">Alterar</a>
                    </td>

                    <td class="a">
                        <form class="a" action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $contato['id'] ?>"/>
                            <input class="btn btn-primary btn-sm" onclick="deletar()" type="submit" name="excluir" value="Excluir"/>
                        </form>
                    </td>

             <?php       
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
<!-- jQuery / Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>    
</html>