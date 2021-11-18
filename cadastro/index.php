<?php
    include('../componentes/header.php');
    if (!isset($_SESSION["usuarioId"])) 
    {
        header("location: ../login/index.php");
    }
?>


    <div class="container">
        <hr>
        <div class="card">
            <div class="card-header">
                <h2>Cadastro</h2>
            </div>
            <div class="card-body">
                <form method="post" action="../acoes.php">

                    <input class="form-control" type="hidden" name="acao" value="cadastrar">
                    <input class="form-control" type="text" placeholder="Digite o nome" name="nome" id="nome" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o sobrenome" name="sobrenome" id="sobrenome" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o email" name="email" id="email" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite celular" name="celular" id="celular" required>
                    <br />
                    <button class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>


<?php
    include('../componentes/footer.php');
?>