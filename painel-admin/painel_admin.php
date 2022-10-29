
<?php
    include_once('../conexao.php');
    session_start();
    include_once('../verificar_autenticacao.php');
 ?>


 <?php 

 if($_SESSION['nivel_usuario'] != 'Administrador'){
 	header('Location: ../login.php');
 	exit();
 }

  ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Portal de Cursos da Escola Q-Cursos Networks, Participe das nossas formações e seja um profissional reconhecido!!">
	<meta name="author" content="Hugo Vasconcelos">
	<meta name="keywords" content="cursos, portal de cursos, curso de tecnologia, cursos de programação, cursos online">
	<title>Painel Administrador</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<link rel="stylesheet" href="../css/estilos-site.css">
	<link rel="stylesheet" href="../css/estilos-padrao.css">
	<link rel="stylesheet" href="../css/cursos.css">
	<link rel="stylesheet" href="../css/painel.css">
	<link rel="stylesheet" href="../css/cards.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="js/validation.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>


<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="../index.php#page-top">
		<img src="../img/logo-qcursos.png" class="img-logo"> <span class="texto-logo">Q-Cursos</span></a>

		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" arial-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation">
			Menu <i class="fas fa-bars"></i>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarResponsive">

			<ul class="navbar-nav ml-auto nav-flex-icons">


				 <li class="nav-item dropdown mr-3">
			        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
			          aria-haspopup="true" aria-expanded="false">
			          <i class="fas fa-user"></i>
			        </a>
			        <div class="dropdown-menu dropdown-menu-right dropdown-default"
			          aria-labelledby="navbarDropdownMenuLink-333">
			          <a class="dropdown-item" href="../logout.php">Sair</a>
			          <a class="dropdown-item" href="../painel-professor/painel_professor.php">Painél dos Professores</a>
			          <a class="dropdown-item" href="../painel-aluno/painel_aluno.php">Painél dos Alunos</a>
			        </div>
			      </li>

					<li class="nav-item avatar mt-1 mr-1">
				        <a class="nav-link p-0" href="#">
				          <img src="../img/administrador.jpg" class="rounded-circle z-depth-0"
				            alt="avatar image" height="35">
				        </a>

				   </li>
				   <li class="nav-item avatar mt-2">
				  	 <span class="text-muted nome_usuario"><?php echo $_SESSION['nome_usuario']; ?> </span>
			     	<li class="nav-item avatar">

			     
	   		 </ul>
	   	</div>

		
	</div>


</nav>

  <div class="container_admin">
   	<div class="row"> 
   		<div class="col-lg-2 col-md-3 col-sm-12" >

		 <!-- Sidebar -->
		    <div class="bg-light" id="sidebar-wrapper">


		      
		      <div class="list-group list-group-flush">

		      	 <span href="#" class="list-group-item ativo">Painél Administrativo</span>
		      	
		        <a href="painel_admin.php?acao=usuarios" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-friends mr-1"></i>Usuários</a>
		        <a href="painel_admin.php?acao=cursos" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book-reader mr-1"></i>Curso</a>
		        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Categorias</a>
		        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Desempenho</a>
		        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Profile</a>
		        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Status</a>
		      </div>
		    </div>

		</div>


	    <div class="col-lg-10 col-md-9 col-sm-12">

			<!--CARREGAMENTO DAS DEMAIS PÁGINAS DO PAINÉL -->
			<?php
			if(@$_GET['acao'] == 'usuarios' or isset($_GET['txtpesquisarUsuarios'])){
				include_once('usuarios.php');
			}else{
				include_once('home.php');
			}
			
			?>

		</div>
	        
	</div>

</div>



