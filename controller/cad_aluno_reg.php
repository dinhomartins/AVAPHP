<?php

//incluso dos arquivos
require_once'Sql.php';
require_once'cad_aluno.php';
require_once'usuarioDAO.php';

// instancia das classes

$aluno = new Aluno();
$aluno->setNome($_POST['nome']);
$aluno->setCpf($_POST['cpf']);
$aluno->setCidade($_POST['cidade']);
$aluno->setEstado($_POST['estado']);
$aluno->setRg($_POST['rg']);
$aluno->setCep($_POST['cep']);
$aluno->setBairro($_POST['bairro']);
$aluno->setDataNascimento($_POST['dataNascimento']);


$alunoDAO = new UsuarioDAO();

// procura o cpf no banco se não encontrar ele executa o cadastro do aluno
$resultado = $alunoDAO->buscaCpf($aluno->getCpf());

// condição se existir o cpf cadastrado informa que foi encontrado o mesmo cpf
if (count($resultado) > 0)
{
    echo 'cpf já cadastrado no sistema';
    header("Refresh:4; url=../view/dashboard/cadastro.php");
}

// se não existir o cpf o sistema irá efetuar o cadastro dos dados
else
{
    $resultado = $alunoDAO->inserirAluno($aluno->getNome(), $aluno->getCpf(),$aluno->getCidade(),$aluno->getEstado(), $aluno->getRg(), $aluno->getCep(),$aluno->getBairro(), $aluno->getDataNascimento());
    ?>
        <script>
            alert("Cadastro com sucesso");
        </script>
    <?php
    header("Refresh:0; url=../view/dashboard/cadastro.php");
}



