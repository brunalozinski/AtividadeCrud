<?php

    session_start();
    require("../database/conexao.php");

    //if ( isset($_POST['acao'])){      
            
        switch ($_POST['acao']) {
            case 'login':
    
                $usuario = $_POST['txt_usuario'];
                $senha = $_POST['txt_senha'];
    
                realizarLogin($usuario, $senha, $conexao);
                exit;
    
            case 'logout':
                session_destroy();
                //session_unset();
                header('location: ./index.php');
                break;
    
                //$_SESSION['usuario'] = $usuario;
                //$_SESSION['idSessao'] = session_id();
                //$_SESSION['data_hora_autenticacao'] = date('d/m/Y - h:i:s');
                //$_SESSION["idAdministrador"] = $dadosUsuario['idAdministrador'];    
            
            default:
                break;
        }


    function realizarLogin($usuario, $senha, $conexao)
    {
        $instrucaoSqlLogin = "SELECT * FROM tbl_loginDados WHERE usuario = '$usuario'";

        $resultado = mysqli_query($conexao, $instrucaoSqlLogin);

        $dadosUsuario = mysqli_fetch_array($resultado);

        if ((isset($dadosUsuario["usuario"]) && $dadosUsuario["usuario"] == $usuario) && (isset($dadosUsuario["senha"]) && $dadosUsuario["senha"] == $senha))
        {
            echo "Logado!";

            $_SESSION["usuarioId"] = $dadosUsuario["idDadosLogin"];
            $_SESSION["usuario"] = $dadosUsuario["usuario"];
            $_SESSION["id"] = session_id();
            $_SESSION["data_hora"] = date('d/m/Y - h:i:s');       

            header("location: ../../index.php");
            exit;

        } else {
            header("location: ./index.php");
        }
    }


?>
