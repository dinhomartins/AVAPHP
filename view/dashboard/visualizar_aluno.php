<?php
  include 'header.php';
  include 'side_menu.php';
  include_once '../../controller/visualizar_aluno.php';
?>
  
<!-- Inicio do formulario -->
<form  >
<?php foreach($resultado as $row): ?>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="nomeCompleto">Nome completo</label>
                <input type="text" class="form-control" readOnly value="<?php echo $row['nome'] ?>" name="nome" id="nome" aria-describedby="nomeCompleto" placeholder="">
                <small id="nomeCompleto" class="form-text text-muted">Informe o nome completo.</small>
            </div>
        </div> 

        <div class="col-md-3">
            <div class="form-group">
                <label for="dataNascimento" >Data Nascimento</label>
                <input type="date" name="dataNascimento" readOnly value="<?php echo $row['cpf'] ?>" id="dataNascimento" min="1954-01-01" 
                max="2040-12-31" class="form-control">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" readOnly name="cpf" value="<?php echo $row['cpf'] ?>" id="cpf" aria-describedby="cpf" placeholder="">
                <small id="cpf" class="form-text text-muted">Informe somente numeros.</small>
            </div>
        </div> 

        <div class="col-md-2">
            <div class="form-group">
                <label for="rg">RG</label>
                <input type="text" class="form-control" readOnly name="rg" id="rg" value="<?php echo $row['rg'] ?>"aria-describedby="rg" placeholder="">
                <small id="rg" class="form-text text-muted">Informe somente numeros.</small>
            </div>
        </div> 

        
        <div class="col-md-4">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" readOnly  aria-describedby="endereco" placeholder="">
                <small id="endereco" class="form-text text-muted">Endereço completo da residencia.</small>
            </div>
        </div> 
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" readOnly name="cep" id="cep" value="<?php echo $row['cep'] ?>" aria-describedby="cep" placeholder="">
                <small id="cep" class="form-text text-muted">Informe o CEP.</small>
            </div>
        </div> 

        <div class="col-md-4">
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" readOnly id="bairro" name="bairro" value="<?php echo $row['bairro'] ?>" aria-describedby="bairro" placeholder="">
                <small id="bairro" class="form-text text-muted">Informe o CEP.</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" readOnly name="cidade" id="cidade" value="<?php echo $row['cidade'] ?>" aria-describedby="cidade" placeholder="">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" readOnly id="estado"  name="estado">
                <option><?php echo $row['estado'] ?></option></option>

                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-primary" id="salvar" value="salvar" data-toggle="modal" data-target="#myModal">Cadastrar</button>
        </div>
    </div>
    <?php endforeach ?>
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