<?php

class userDAO extends conexao
{
    function __construct()
    {
        parent:: __construct();
    }

    function inserir($usuario)
    {
        $sql = "INSERT INTO tbuser (nome,email,senha) VALUES (?,?,?)";
        try
        {
            $stm =$this->bd->prepare($sql);
            $stm->bindValue(2, $usuario->getNome());
            $stm->bindValue(3, $usuario->getEmail());
			$stm->bindValue(4, $usuario->getSenha());
            $ret = $stm->execute();
            $this->db = null;
				if(!$ret)
				{
					die("Erro ao inserir usuario");
				}
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }//inserir

    function autenticacar($usuario)
    {
        $sql = "SELECT id_usuario,nome,email FROM usuario WHERE email=? AND senha=?";
        try
        {
            $stm = $this->db->prepare($sql);
			$stm->bindValue(1,$usuario->getEmail());
			$stm->bindValue(2,$usuario->getSenha());
			$stm->execute();
			$this->db = null;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }//autenticar
}
?>