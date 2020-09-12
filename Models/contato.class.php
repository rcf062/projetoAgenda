<?php

class contato
{

    private $id;
    private $nome;
    private $telefone;
    private $logradouro;
    private $bairro;
    private $numero;

    public function __construct($id="",$nome="",$telefone="",$logradouro="",$bairro="",$numero="")

    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }

    //gets
    function getId()
	{
		return $this->id;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getTelefone()
    {
        return $this->telefone;
    }
    function getLogradouro()
    {
        return $this->logradouro;
    }
    function getBairro()
    {
        return $this->bairro;
    }
    function getNumero()
    {
        return $this->numero;
    }

    //sets
    function setID($id)
    {
        $this->id = $id;
    }
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }
    function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    function setNumero($numero)
    {
        $this->numero = $numero;
    }

}//class ends

?>