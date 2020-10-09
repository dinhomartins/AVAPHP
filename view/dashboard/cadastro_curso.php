<?php
  include 'header.php';
  include 'side_menu.php';
?>

<form action="../../controller/cad_curso.php" method="POST" >
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="nomeCurso">Nome Curso</label>
                <input type="text" class="form-control" name="nomeCurso" id="nomeCurso" aria-describedby="emailHelp" placeholder="">
                <small id="nomeCurso" class="form-text text-muted">Informe o nome completo.</small>
            </div>
        </div> 


        <div class="col-md-2">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Area</label>
                <select class="form-control" name="area" id="area">
                <option>Selecione</option>
                <option>Arquitetura</option>
                <option>Tecnologia</option>
                <option>Saúde</option>
                <option>Moda</option>
                <option>Educação</option>
                <option>Música</option>
                </select>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="cargaHoraria">Carga Horária</label>
                <input type="text" class="form-control" name="cargaHoraria" id="cargaHoraria" aria-describedby="emailHelp" placeholder="">
                <small id="emailHelp" class="form-text text-muted">Informe somente numeros.</small>
            </div>
        </div> 

         
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="nomeCompleto">Quantidade de aulas</label>
                <input type="text" class="form-control" name="quantidadeDeAulas" id="quantidadeDeAulas" aria-describedby="emailHelp" placeholder="">
                <small id="cep" class="form-text text-muted">Informe o CEP.</small>
            </div>
        </div> 

        <div class="col-md-4">
            <div class="form-group">
                <label for="nomeCompleto">Professor</label>
                <input type="text" class="form-control" name="professor" id="professor" aria-describedby="emailHelp" placeholder="">
                <small id="cep" class="form-text text-muted">Informe o CEP.</small>
            </div>
        </div>


        <div class="col-md-2">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Certificado</label>
                <select class="form-control" name="certificado" id="certificado">
                <option>Selecione</option>
                <option>Sim</option>
                <option>Não</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>

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









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
</body>
</html>