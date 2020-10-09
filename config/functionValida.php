<?php 

function valida($cpf, $senha){
    // inclui a conexão com o banco
    require_once('../sql/Sql.php');

    // variaveis globais
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    // instancia da conexão com o banco
    $user = new Sql();

    // busca registros no banco
    $resultado = $user->query('SELECT * FROM users');

    // percorre todos os registros e armazena na variavel results
    while ($results = $resultado->fetch(PDO::FETCH_ASSOC)) {
        // inicia a sessão e armazena os dados nas variaveis SESSION
        session_start();
        $_SESSION['cpf'] = $results['cpf'];
        $_SESSION['senha'] = $results['senha'];
        $_SESSION['nivelAcess'] = $results['nivelAcess'];
        // Validação de login - se cpf e senha estiver cadastrador o usuario será redirecioado para a página  home
        if($_SESSION['cpf'] == $cpf && $_SESSION['senha'] == $senha && $_SESSION['nivelAcess'] == 'aluno')  {
            header('Location: ..\view\home.php');
        }
            elseif($_SESSION['cpf'] == $cpf && $_SESSION['senha'] == $senha && $_SESSION['nivelAcess'] == 'colaborador'){
                header('Location: ..\view\dashboard\dashboard.php');    
            }else{
            ?>
                <script type="text/javascript">
                    alert("usuario não encontrado");
                    //  header('Location: ..'); 
                    <?php header("Refresh: 2; url = ../"); ?>
                </script>
            <?php
        }
    }
}
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$usuario = valida($cpf, $senha);

 ?>