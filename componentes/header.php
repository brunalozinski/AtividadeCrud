<?php   
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <title>Sistema de Cadastro</title>

</head>

<body>
    
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href=""> Cadastro </a>

    <?php if (isset($_SESSION["usuarioId"])) 
        {?>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../cadastro">Cadastrar</a>
                </li>

            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../listagem">Listar</a>
                </li>
                
            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" onclick="sair()">Sair</a>
                </li>
            </ul>
        

    <form id="form-logout" style="display:none" method="POST" action="../login/processa_login.php">
            <input type="hidden" name="acao" value="sair" />
    </form>

    <script lang="javascript">
        function sair() {
            document.querySelector("#form-logout").submit();
        }
    </script>
    <?php }?>
    

</nav>
