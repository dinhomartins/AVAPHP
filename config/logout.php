<?php 
// inicia a sessão
session_start();

// destroi a sessão
session_unset();
echo 'Deslogado com sucesso ';

// redireciona a pagina para o index
header("Refresh: 2; url = ../");

?>