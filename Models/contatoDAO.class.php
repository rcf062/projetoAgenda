<?php

class contatoDAO extends conexao
{
    function __construct()
    {
        parent:: __construct();
    }

    function inserir($contato)
    {
        $sql = "INSERT INTO contato(nome,telefone,logradouro,bairro,numero) VALUES (?,?,?,?,?)";
        try
        {
            //prepare sql query
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $contato->getNome()); 
            $stm->bindValue(2, $contato->getTelefone());
            $stm->bindValue(3, $contato->getLogradouro());
            $stm->bindValue(4, $contato->getBairro());
            $stm->bindValue(5, $contato->getNumero());
            $stm->execute();
            //close
            $this->db = null;

        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }//inserir

    function buscarTodosContatos()
    {
        $sql ="SELECT * FROM contato";
        try
        {
            $stm= $this->db->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchALL(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }//buscar todos

   function buscarUmContato($contato)
        {
            $sql = "SELECT * FROM contato WHERE id = ?";
            
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1,$contato->getId());
                $stm->execute();
                $this->db = null;
                return $stm->fetchAll(PDO::FETCH_OBJ);

            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }

        }
    
    function alterar($contato)
    {
        $sql = "UPDATE contato SET nome=?, telefone=?, logradouro=?, bairro=?, numero=? WHERE id = ?";
        try
        {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1,$contato->getNome());
            $stm->bindValue(2,$contato->getTelefone());
            $stm->bindValue(3,$contato->getLogradouro());
            $stm->bindValue(4,$contato->getBairro());
            $stm->bindValue(5,$contato->getNumero());
            $stm->bindValue(6,$contato->getId());
            $stm->execute();
			$this->db = null;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }//alterar

    function excluir($contato)
    {
        $sql = "DELETE FROM contato where id =?";
        try
        {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1,$contato->getId());
            $stm->execute();
            $this->db = null;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }//excluir
}//class ends
?>