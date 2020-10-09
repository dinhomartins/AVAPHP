<?php
  include 'header.php';
  include 'side_menu.php';
  //include '../../controller/Sql.php';
include '../../controller/usuarioDAO.php';
include '../../controller/relatorio_total_alunos.php';
$contador = $relatorio->contar();
?>


<div class="container">
<div class="row">
  <div class="col-md-12">
    <h4>Relatórios</h4>
  <div class="content2">
    
    <div class="box-count shadown">
      <p>Total Alunos</p>
      <h4><?php echo $contador ?></h4>
    </div>

    <div class="box-count shadown">
      <p>Total Alunos ATivos  </p>
      <h4></h4>
    </div>

    <div class="box-count shadown">
      <p>Total Alunos Trancados  </p>
      <h4></h4>
    </div>

    <div class="box-count shadown">
      <p>Total Alunos Concluidos  </p>
      <h4></h4>
    </div>
  </div>

  <div class="row">
  <div class="col-md-12">
    <h4 style="padding-top: 20px" >Relatório alunos por curso</h4>

  <div class="content2">
    
    <div class="box-count shadown" style="background-color: #4287f5" >
      <h4>Instalação ar condicionado</h4>
      <p></p>
    </div>

    <div class="box-count shadown" style="background-color:#42f581" >
      <h4>Eletricista</h4>
      <p></p>
    </div>

    <div class="box-count shadown" style="background-color:#f59042" >
      <h4>Manutenção Geladeira</h4>
      <p></p>
    </div>

    <div class="box-count shadown" style="background-color:#f5429e" >
      <h4>Manutenção máquina de lavar</h4>
      <p></p>
    </div>
  </div>

  
    </div>
  </div>
  </div>
</div>
</div>





</div>
<script>
    
    $('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '-3d'
});
</script>
    </div>
</div>
  </div>

<?php
include 'footer.php';