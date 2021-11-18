<?php

    require("database/conexao.php");

    if (isset($_POST['acao'])) 
    {
        switch ($_POST["acao"]) 
        {
            case 'cadastrar':

                //RECEBER DADOS
                    $nome = $_POST["nome"];
                    $sobrenome = $_POST["sobrenome"];
                    $email = $_POST["email"];
                    $celular = $_POST["celular"];

                //INSERÇÃO DADOS
                    $instrucaoSqlInsercao = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular) VALUES ('$nome', '$sobrenome', '$email', '$celular');";

                    $resultadoEdicao = mysqli_query($conexao, $instrucaoSqlInsercao);

                    header("location: index.php");

                break;

            case 'excluir':
                    $idExclusao = null;

                    if (isset($_POST["id"])) 
                    {$idExclusao = $_POST["id"];
                    }

                //EXCLUSAO DADOS
                    $instrucaoSqlExclusao = "DELETE FROM tbl_pessoa WHERE (cod_pessoa = $idExclusao);";

                    $resultadoExclusao = mysqli_query($conexao, $instrucaoSqlExclusao);

                    header("location: index.php");

                break;

            case 'editar' :

                //RECEBENDO DADOS
                    $idPessoaEdited = $_POST['id'];
                    $nomePessoaEdited = $_POST['nome'];
                    $sobrenomePessoaEdited = $_POST['sobrenome'];
                    $emailPessoaEdited = $_POST['email'];
                    $celularlPessoaEdited = $_POST['celular'];


                    $instrucaoSqlEdicao = "UPDATE tbl_pessoa SET nome = '$nomePessoaEdited', sobrenome = '$sobrenomePessoaEdited', email = '$emailPessoaEdited', celular = '$celularlPessoaEdited' WHERE cod_pessoa = $idPessoaEdited;";
                    $resultadoEdicao = mysqli_query($conexao, $instrucaoSqlEdicao);
                        
                    header("location: index.php");

                break;

            default:
                break;
        }
    }

    function listarPessoa ($conexao)
    {
        $instrucaoSqlListar = "SELECT * FROM tbl_pessoa;";
        
        $resultado = mysqli_query($conexao,$instrucaoSqlListar);
            return $resultado;
    }

    function listarPessoaPeloId ($conexao, $idPessoa)
    {
        $instrucaoSqlListar = "SELECT * FROM tbl_pessoa WHERE cod_pessoa = $idPessoa;";
        
        $resultado = mysqli_query($conexao,$instrucaoSqlListar);
            return $resultado;
    }





?>