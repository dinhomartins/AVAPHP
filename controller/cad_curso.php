<?php
// adicionar cursos

require_once'../sql/Sql.php';
require_once'cad_curso.classe.php';
require_once'usuarioDAO.php';


// captura dados do form
$curso = new CadCurso();
$curso->setNomeCurso($_POST['nomeCurso']);
$curso->setArea($_POST['area']);
$curso->setCargaHoraria($_POST['cargaHoraria']);
$curso->setCertificado($_POST['certificado']);
$curso->setQuantidadeDeAulas($_POST['quantidadeDeAulas']);
$curso->setProfessor($_POST['professor']);

// insere os dados no banco de dados
$cursoDAO = new UsuarioDAO();

$resultado = $cursoDAO->buscaCurso($curso->getNomeCurso());
if(count($resultado) > 0)
{
    echo 'Curso já está cadastrado no sistema';
    header("Refresh:0; url=../view/dashboard/cadastro_curso.php");
}
else
{
    $resultado = $cursoDAO->inserircurso($curso->getNomeCurso(), $curso->getArea(), $curso->getCargaHoraria(), $curso->getCertificado(), $curso->getQuantidadeDeAulas(), $curso->getProfessor());
    $imprima = $curso->getNomeCurso();
    header("Refresh:0; url=../view/dashboard/cadastro_curso.php");
    ?>
    
    <script>
        var imprima = "<?php echo $imprima ?>"
        alert('Curso ' + imprima + ' Cadastrado com sucesso ');
    </script>
    <?php 
}

// chama os metodos