<?php
require_once "cabec.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Meus Contatos</title>
</head>
<body>
    <div class="titulo">
    <h1>Inserir Contatos</h1>
    </div>
    <form action="#" method="POST" id="formCad">
        <fieldset>
    <p>
        <label>Nome:</label>
        <input type="text" placeholder="nome" name="nome" value = '<?php if($id != 0) echo $ret[0]->nome; ?>'>
    </p>
    <p>
        <label>Telefone:</label>
        <input id="telefone"  type="text" placeholder="(99)9999-9999" name="telefone"  value = '<?php if($id != 0) echo $ret[0]->telefone; ?>' >
    </p>
    <p>
        <label>Logradouro:</label>
        <input type="text" placeholder="logradouro" name="logradouro"  value = '<?php if($id != 0) echo $ret[0]->logradouro; ?>'>
    </p>
    <p>
        <label>Bairro:</label>
        <input type="text" placeholder="bairro" name="bairro"  value = '<?php if($id != 0) echo $ret[0]->bairro; ?>'>
    </p>
    <p>
        <label>Numero:</label>
        <input type="text" placeholder="numero" name="numero"  value = '<?php if($id != 0) echo $ret[0]->numero; ?>'>
    </p>
    <br>
    <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <div class="voltar">
    <a href="index.php?controle=contatoControl&metodo=mostrar">Voltar</a>
    </div>
</body>
</html>