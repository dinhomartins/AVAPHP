<?php

require_once'Sql.php';

class UsuarioDAO extends Sql {

    // inserir aluno
    public function inserirAluno($nome, $cpf, $cidade, $estado, $rg, $cep, $bairro, $dataNascimento)
    {
        $sql = new Sql();

        $resultado = $sql-> query("INSERT INTO aluno (nome, cpf, cidade, estado, rg, cep, bairro, dataNascimento) 
                                    VALUES (:NOME, :CPF, :CIDADE, :ESTADO, :RG, :CEP, :BAIRRO, :DATANASCIMENTO)", array(":NOME"=>$nome, ":CPF"=>$cpf, ":CIDADE"=>$cidade, ":ESTADO"=>$estado, ":RG"=>$rg, ":CEP"=>$cep, ":BAIRRO"=>$bairro, ":DATANASCIMENTO"=>$dataNascimento));
        return ($resultado);
    }

    public function buscaCpf($cpf)
    {
        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM aluno WHERE cpf = :CPF", array(":CPF"=>$cpf));
        return $resultado;
    }

    public function verAluno($idAluno)
    {
        $sql = new Sql();

        $resultado =  $sql->select("SELECT * FROM aluno WHERE id = :ID", array(":ID"=>$idAluno));
        return $resultado;
    }



    public function inserircurso($nomeCurso, $area, $cargaHoraria, $certificado, $quantidadeDeAulas, $professor)
    {
        $sql = new Sql();

        $resultado = $sql->query("INSERT INTO cursos (nomeCurso, area, cargaHoraria, certificado, quantidadeDeAulas, professor) 
                                    VALUES (:NOME, :AREA, :CARGAHORARIA, :CERTIFICADO, :QUANTIDADEDEAULAS, :PROFESSOR)", 
                                    array(":NOME"=>$nomeCurso, ":AREA"=>$area, ":CARGAHORARIA"=>$cargaHoraria, ":CERTIFICADO"=>$certificado, ":QUANTIDADEDEAULAS"=>$quantidadeDeAulas, ":PROFESSOR"=>$professor));
        return ($resultado);
    }

    public function buscaCurso($nomeCurso)
    {
        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM cursos WHERE nomeCurso = :NOMECURSO", array(":NOMECURSO"=>$nomeCurso));
        return $resultado;
    }

    public function listar3()
    {
        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM aluno");
        return $resultado;
    }

    public function contar()
    {
      $sql = new Sql();
      $stmt = $sql->query("SELECT * FROM aluno");
      $count = $stmt->rowCount();
      return $count;
    }

    public function buscaAluno($nomeAluno){
        $sql = new Sql();
        
        $results = $sql->select("SELECT * FROM aluno WHERE nome LIKE :NOMEALUNO", array(":NOMEALUNO"=>$nomeAluno));
        return $results;
        // foreach($results as $row)
        // {
        //     echo $row['nome'];
        //     echo '<br>';
        // }
    }



    public function listar() {
        $sql = new Sql();
        $data = $sql->query("SELECT * FROM aluno")->fetchAll();
        foreach ($data as $row) {
          //  echo 'Nome: '.$row['nome']."<br />\n";
          //  echo 'CPF: '.$row['cpf']."<br />\n";
    
           ?>
            <div class="col-md-4" style="display:flex; flex-direction: row" >
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row['nome'] ?>"readonly aria-describedby="nomeCompleto" placeholder="">
                    <small id="nomeCompleto" class="form-text text-muted"></small>
                </div>
                <button class="btn btn-primary" <?php echo $row['id'] ?> style="height: 40px; display: flex; margin-left: 20px" >Visualizar</button>
            </div>
    
           <?php
    };
      
}

}