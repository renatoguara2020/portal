<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Portal de Cursos da Escola Q-Cursos Networks, Participe das nossas formações e seja um profissional reconhecido!!">
	<meta name="author" content="Hugo Vasconcelos">
	<meta name="keywords" content="cursos, portal de cursos, curso de tecnologia, cursos de programação, cursos online">
	<title>Portal Q-Cursos</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<link rel="stylesheet" href="css/estilos-site.css">
	<link rel="stylesheet" href="css/estilos-padrao.css">
	<link rel="stylesheet" href="css/cursos.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="js/validation.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>


<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="index.php#page-top">
		<img src="img/logo-qcursos.png" class="img-logo"> <span class="texto-logo">Q-Cursos</span></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" arial-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation">
			Menu <i class="fas fa-bars"></i>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarResponsive">
	    	<ul class="navbar-nav text-uppercase ml-auto textos-menu">
	    		<li class="nav-item">
	    			<a class="nav-link js-scroll-trigger" href="index.php#formacoes">Formações</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link js-scroll-trigger" href="index.php#cursos">Cursos</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link js-scroll-trigger" href="index.php#qcursos">Q-Cursos</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link js-scroll-trigger" href="index.php#alunos">Alunos</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link js-scroll-trigger" href="index.php#contatos">Contato</a>
	    		</li>

	    		<?php 

	    		session_start();
	    		if(!@$_SESSION['usuario']){  ?>
				
					<li class="nav-item">
	    			<a class="nav-link js-scroll-trigger" href="login.php" target="_blank">Login</a>
	    			</li>
				
				<?php  } else{ ?>

					<li class="nav-item">
	    			<a class="nav-link js-scroll-trigger" href="logout.php" target="_blank">Sair</a>
	    			</li>

				<?php }

	    		 ?>

	    		
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
		      <button class="btn btn-outline-light my-2 my-sm-0 botao-buscar" type="submit"><i class="fas fa-search"></i></button>


		    </form>
	    </div>
	</div>
</nav>
