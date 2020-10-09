<?php
// adicionar cursos

require_once'../../sql/Sql.php';
require_once'../../controller/cad_curso.classe.php';
require_once'../../controller/usuarioDAO.php';



// captura dados do form
$curso = new CadCurso();
$curso->setNomeCurso($_POST['nomeCurso']);
$curso->setArea($_POST['area']);
$curso->setCargaHoraria($_POST['cargaHoraria']);
$curso->setCertificado($_POST['certificado']);
$curso->setQuantidadeDeAulas($_POST['quantidadeDeAulas']);
$curso->setProfessor($_POST['professor']);


echo $curso->getNomeCurso();
$cursoDAO = new UsuarioDAO();
// chama os metodos
$resultado = $cursoDAO->inserircurso($curso->getNomeCurso(), $curso->getArea(), $curso->getArea(), $curso->getCargaHoraria(), $curso->getCertificado, $curso->getQuantidadeDeAulas, $curso->getProfessor());
