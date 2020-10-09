<?php
  include 'header.php';
  include 'side_menu.php';
?>
  
<!-- Inicio do formulario -->
<form action="../../controller/cad_aluno_reg.php" method="POST" >
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="nomeCompleto">Nome completo</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomeCompleto" placeholder="">
                <small id="nomeCompleto" class="form-text text-muted">Informe o nome completo.</small>
            </div>
        </div> 

        <div class="col-md-3">
            <div class="form-group">
                <label for="dataNascimento" >Data Nascimento</label>
                <input type="date" name="dataNascimento" id="dataNascimento" min="1954-01-01" 
                max="2040-12-31" class="form-control">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" name="cpf" id="cpf" aria-describedby="cpf" placeholder="">
                <small id="cpf" class="form-text text-muted">Informe somente numeros.</small>
            </div>
        </div> 

        <div class="col-md-2">
            <div class="form-group">
                <label for="rg">RG</label>
                <input type="text" class="form-control" name="rg" id="rg" aria-describedby="rg" placeholder="">
                <small id="rg" class="form-text text-muted">Informe somente numeros.</small>
            </div>
        </div> 

        
        <div class="col-md-4">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" aria-describedby="endereco" placeholder="">
                <small id="endereco" class="form-text text-muted">Endereço completo da residencia.</small>
            </div>
        </div> 
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" aria-describedby="cep" placeholder="">
                <small id="cep" class="form-text text-muted">Informe o CEP.</small>
            </div>
        </div> 

        <div class="col-md-4">
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" aria-describedby="bairro" placeholder="">
                <small id="bairro" class="form-text text-muted">Informe o CEP.</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" aria-describedby="cidade" placeholder="">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" id="estado" name="estado">
                <option>Selecione</option></option>
                <option>Df</option>
                <option>Sp</option>
                <option>Ma</option>
                <option>Mg</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-primary" id="salvar" value="salvar" data-toggle="modal" data-target="#myModal">Cadastrar</button>
        </div>
    </div>
</form>


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