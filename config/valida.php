<?php 

// inclui a conexão com o banco
require_once('../sql/Sql.php');

// variaveis globais
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

// instancia da conexão com o banco
$user = new Sql();

// busca registros no banco
$resultado = $user->query('SELECT * FROM users');

while ($results = $resultado->fetch(PDO::FETCH_ASSOC)) {
	
	session_start();
	$_SESSION['cpf'] = $results['cpf'];
	$_SESSION['senha'] = $results['senha'];

	if($_SESSION['cpf'] == $cpf && $_SESSION['senha'] == $senha)  {
        header('Location: ..\view\home.php');
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

 ?>