
<?php
/*
    require_once "models/conexao.class.php";
    require_once "models/usuarioDAO.class.php";
    require_once "models/usuario.class.php";

    class usuarioControl
    {
        function inserir()
        {
            $id=0;
            if($_POST)
            {
                $erro = 0;
                if($_POST["nome"] == ""){
					echo "<script>alert('Preencha o nome')</script>";
					$erro++;
				}
                if($_POST["email"] == ""){
					echo "<script>alert('Preencha o email')</script>";
					$erro++;
				}
				if($_POST["senha"] == ""){
					echo "<script>alert('Informe uma senha!')</script>";
				$erro++;
                }

				if ($erro == 0){

					$usuario = new usuario(null,$_POST["email"],md5($_POST["senha"]));
					$usuarioDAO = new usuarioDAO();
					$usuarioDAO->inserir($usuario);
					header("location:index.php?Contollers=usuarioControl&metodo=logar");
				}		
			}//if
			require_once "Views/listarContatos.php";	
        }//inserir

        function logar()
        {
            $id=0;
            if($_POST)
            {
                $erro =0;
                if($_POST["email"] == ""){
					echo "<script>alert('Preencha o e-Mail);</script>";
					$erro++;
                }                
				if($_POST["senha"] == ""){
					echo "<script>alert('Preencha a senha);</script>";
					$erro++;
                }
                
				if($erro == 0){
					$usuario = new usuario(null,$_POST["email"], md5($_POST['senha']),null);
					$usuarioDAO = new usuarioDAO();
                    $ret = $usuarioDAO->autenticar($usuario);
                    
					if(count($ret) > 0){
						//logado
						session_start();
						$_SESSION['id'] = $ret[0]->id_usuario;
						$_SESSION['email'] = $ret[0]->email;
						header("location:index.php?controle=estabelecimentoControl&metodo=inserir&oper=I");

					}
					else{
						//não logado
						echo "<script>alert('email/senha não conferem');</script>";
					}
				}//if error
			}//post
			require_once("views/menu.php");
        }//logar
    }
    */
