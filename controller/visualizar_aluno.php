<?php

include_once'usuarioDAO.php';
include_once'visualizar_aluno.class.php';

$visualizar = new VerAluno();
$visualizar->setIdAluno($_GET['id']);

$visualizarDAO = new usuarioDAO();

$resultado = $visualizarDAO->verAluno($visualizar->getIdAluno());

foreach($resultado as $row){

}