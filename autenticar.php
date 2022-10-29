<?php
    include_once('conexao.php');
    session_start();
 ?>


 <?php

 if(empty($_POST['usuario']) || empty($_POST['senha'])){
 	header('Location:login.php');
 	exit();

 }


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuarios where usuario = '$usuario' and senha = '$senha' ";

$result = mysqli_query($conexao, $query);
$dado = mysqli_fetch_array($result);                    	
$linha = mysqli_num_rows($result);
                      	

if($linha > 0){

	$_SESSION['usuario'] = $usuario;
	$_SESSION['nome_usuario'] = $dado['nome'];
	$_SESSION['nivel_usuario'] = $dado['nivel'];
	$_SESSION['cpf_usuario'] = $dado['cpf'];

	if($_SESSION['nivel_usuario'] == 'Administrador'){
		header('Location:painel-admin/painel_admin.php');
		exit();
	}

	if($_SESSION['nivel_usuario'] == 'Professor'){
		header('Location:painel-professor/painel_professor.php');
		exit();
	}

	if($_SESSION['nivel_usuario'] == 'Aluno'){
		header('Location:painel-aluno/painel_aluno.php');
		exit();
	}
	
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location:login.php');
}







 ?>