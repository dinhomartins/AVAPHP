<?php  
  // inclusão do header
  include 'header.php';
?>
<body>
    
  <div class="content">

  <div class="side-menu">
    <div class="icon-box">
      <i class="fa fa-user fa-5x"></i>
    </div>
      <div class="box-side-menu">
        <ul>
          <li class="link-style"><a href="cadastro.php">Estudantes</a></li>
          <li class="link-style"><a href="">Professor</a></li>
          <li class="link-style"><a href="">Exame</a></li>
          <li class="link-style"><a href="">Biblioteca</a></li>
          <li class="link-style"><a href="">Aviso de eventos</a></li>
          <li class="link-style"><a href=""></a></li>
          <li class="link-style"><a href=""></a></li>
        </ul>
      </div>
    </div>
    <div class="container">
    <div class="box mt-2">
        <div class="row">
            <div class="infor btn-primary">
              <a href="cadastro.php">Cadastrar novo aluno</a>
            </div>
            <div class="infor btn-danger">
              Cadastrar Turma
            </div>
            <div class="infor btn-success">
              Cadastrar Curso
            </div>
            <div class="infor btn-warning">
              Cadastrar Turma
            </div>
      </div>

      <div class="row">
            <div class="infor2  btn-info">
            Relatório Alunos Ativos
            </div>
            <div class="infor2 btn-dark">
            Relatório Turmas
            </div>
      </div>

      <div class="row">
            <div class="infor2 btn-warning">
              Pesquisa por aluno
            </div>
            <div class="infor2 btn-secondary">
              Pesquisa por curso
            </div>
      </div>
    </div>
    </div>
  </div>

<?php
include 'footer.php';
?>