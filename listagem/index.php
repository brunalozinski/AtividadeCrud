<?php
    include('../componentes/header.php');
    require("../acoes.php");

    if (isset($_SESSION["usuarioId"])) {

        //header("location: ../login/index.php");
    
    }

    $resultado = listarPessoa($conexao);
?>

<div class="container">

    <br/>
    
    <table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Celular</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
            <?php 
                while ($pessoa = mysqli_fetch_array($resultado)) 
                {
                    ?>
                    <tr>
                        <th><?= $pessoa["cod_pessoa"]?></th>
                        <th><?= $pessoa["nome"]?></th>
                        <th><?= $pessoa["sobrenome"]?></th>
                        <th><?= $pessoa["email"]?></th>
                        <th><?= $pessoa["celular"]?></th>

                        <th>
                            <a class="btn btn-warning" href="../cadastro/editar.php?id=<?= $pessoa['cod_pessoa']?>"> Editar </a>

                            <form action="../acoes.php" method="post" style="display: inline;">
                                <input type="hidden" name="acao" value="excluir">
                                <input type="hidden" name="id" value="<?= $pessoa["cod_pessoa"]?>">
                                <button class="btn btn-danger"> Excluir </button>
                            </form>
                            
                        </th>
                    </tr>

            <?php }?>
    </tbody>

    </table>
</div>

<?php
    include('../componentes/footer.php');
?>