<?php

// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['cpf'])){   
	header('Location: ../');
}

?>
