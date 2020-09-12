<?php
require_once "cabec.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Contatos</title>
</head>
<body>
    <div class="titulo">
    <h1>Meus Contatos</h1>
    </div>
    <table border="1px" class="table1">
        <th>Nome</th>
        <th>Telefone</th>
        <th>Logradouro</th>
        <th>Bairro</th>
        <th>Numero</th>
        <th>Ações</th>
        <?php
            foreach($retorno as $dado)
            {
                echo"<tr>";
                echo"<td>{$dado->nome}</td>";
                echo"<td>{$dado->telefone}</td>";
                echo"<td>{$dado->logradouro}</td>";
                echo"<td>{$dado->bairro}</td>";
                echo"<td>{$dado->numero}</td>";
                echo "<td><a href='index.php?controle=contatoControl&metodo=alterar&id={$dado->id}'>Alterar</a>&nbsp;&nbsp";
                echo "<a href='index.php?controle=contatoControl&metodo=excluir&id={$dado->id}'>Excluir</a></td>";
                echo"<tr>";
            }
        ?>
    </table>
    <div class="voltar">
    <a href="index.php?controle=contatoControl&metodo=mostrar">Voltar</a>
    </div>
</body>
</html>