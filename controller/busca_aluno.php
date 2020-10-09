<?php

include 'busca_aluno.class.php';
include 'usuarioDAO.php ';

$busca = new BuscaAluno();
$busca->setNomeAluno($_POST['nomeAluno']);

$buscaDAO = new usuarioDAO();

$resultado = $buscaDAO->buscaAluno($busca->getNomeAluno());

// foreach ($resultado as $row) {
//     {
//         echo 'Nome '. $row['nome'];
//         echo '<br>';
//     }
// }







