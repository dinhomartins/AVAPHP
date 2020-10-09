<?php
  require('../controller/controlSession.php');
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <title>Sistema Inteligante - Aulas Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="../img/logonavbar.png" width="60" height="30" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cursos.php">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sala.php">Sala de aula</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="..\config\logout.php" class="btn btn-outline-warning my-2 my-sm-0" type="submit">Sair</a>
    </form>
  </div>
</nav>
<div class="body-master">
<div class="side-menu">
    <div class="top-menu">
        <div class="perfil">
            <p>Ubiraci Martins Souto</p>
            <i class="fa fa-user fa-2x icone-perfil" aria-hidden="true"></i>
        </div>
    </div>
    <div class="top-menu2">
    <i class="fa fa-folder-o icone" aria-hidden="true"></i>
        <p>Portal</p>
    </div>
    <div class="sub-menu">
    <i class="fa fa-desktop icone" aria-hidden="true"></i>
        <p>Calendario</p>
    </div>
</div>

<div class="corpo">

    <div class="content-corpo">

    <div class="row">
        <div class="col-md-12">
            <p class="titulo" >Sala de aula interativa</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="box-infor shadow-sm p-3 mb-5 bg-white rounded"">
            <a href="sala.php"><i class="fa fa-desktop fa-4x" aria-hidden="true" color="red"></i></a> 
            <span >Sala de aula</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box-infor shadow-sm p-3 mb-5 bg-white rounded"">
            <a href="sala.php"><i class="fa fa-desktop fa-4x" aria-hidden="true" color="red"></i></a> 
            <span >Novidades</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box-infor shadow-sm p-3 mb-5 bg-white rounded"">
            <i class="fa fa-info-circle fa-4x"" aria-hidden="true"></i>
            <span >Secretaria Virtual</span>
            </div>
        </div>

        <!-- <div class="col-md-3">
            <div class="box-infor">
            <i class="fa fa-book fa-4x" aria-hidden="true"></i>
            <span>Fale com o tutor</span>
            </div>
        </div> -->
    </div>

    <!-- Divisão aulas  -->


    <!-- FIm divisão aulas -->

    </div>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>












