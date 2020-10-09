<?php
  include 'header.php';
  include 'side_menu.php';
?>
  
<!-- Inicio do formulario -->
<form  method="POST" >
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="nomeAluno" id="nomeAluno" aria-describedby="nomeCompleto" placeholder="">
                <small id="nomeCompleto" class="form-text text-muted">Informe o nome completo.</small>
            </div>
        </div> 

    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-primary" id="enviar" value="enviar" name="enviar" data-toggle="modal" data-target="#myModal">Pesquisar</button>
        </div>
    </div>
    <?php
    // se o botão for submit carregue a página aqui
    if(isset($_POST['enviar'])){
        require_once('../../controller/busca_aluno.php');
    }
?>

<div class="container">
    <div class="content-box-add">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th  scope="col">Nome</th>
                    <th style="width:20%" scope="col">Ação</th>
                </tr>
            </thead>
            <?php 
                     if(isset($resultado )): ?>
                   <?php foreach ($resultado as $row):
                    
                    ?>

                                    
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $row['nome'] ?>
                        <?php if($row == ''): echo 'não encontrado'; endIf ?>   
                        </th>
                        <td><a href="visualizar_aluno.php?id=<?php echo $row['id']?>" class="btn btn-primary"  style="color:#fff">Visualizar</button> </td>				
                    </tr>
                        
                        <?php  endForeach ?>
                        <?php endIf ?>
                </tbody>
		    </table> 
    </div>
</div>
</form>
<!-- Inicio do resultado -->

<!-- End of form -->
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
?>

<script src="../../js/validate_aluno.js"></script>