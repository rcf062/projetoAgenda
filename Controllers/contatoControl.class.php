<?php

require_once "Models/conexao.class.php";
require_once "Models/contato.class.php";
require_once "Models/contatoDAO.class.php";

class contatoControl
{
    function mostrar()
    {
        require_once "Views/listarContatos.php";
    }
    function listar()
    {
        $contatoDAO = new contatoDAO();
        $retorno = $contatoDAO->buscarTodosContatos();
        require_once "Views/listarContatos1.php";
    }

    function inserir()
    {
        $id=0;
        if($_POST)
        {
            $contato = new contato(null, $_POST["nome"],$_POST["telefone"],$_POST["logradouro"],$_POST["bairro"],$_POST["numero"]);
            $contatoDAO = new contatoDAO();
            $contatoDAO->inserir($contato);
            header("location:index.php?controle=contatoControl&metodo=listar");
        }
        require_once "Views/form_contato.php";
    }

    function excluir()
    {
        if(isset($_GET["id"]))
        {
            $contato = new contato($_GET["id"]);
            $contatoDAO = new contatoDAO();
            $contatoDAO->excluir($contato);
            header("location:index.php?controle=contatoControl&metodo=listar");
        }//if
    }//excluir

    function alterar()
    {
        if(isset($_GET["id"]))
            {
                $id = $_GET["id"];
                $contato = new contato($_GET["id"]);
                $contatoDAO = new contatoDAO();
                $ret  = $contatoDAO->buscarTodosContatos($contato);
                if(count($ret)>0)
                {
                    require_once "Views/form_contato.php";
                }   
            }//get

        if($_POST)
        {
            $contato = new contato($id, $_POST["nome"],$_POST["telefone"],$_POST["logradouro"],$_POST["bairro"],$_POST["numero"]);
            $contatoDAO = new contatoDAO();
            $contatoDAO->alterar($contato);
            header("location:index.php?controle=contatoControl&metodo=listar");
        }//post
    }//alterar
}

?>