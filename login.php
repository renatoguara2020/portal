
    <?php
    include_once('conexao.php');
    session_start();
    ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login - Portal Q-Cursos</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

<link rel="stylesheet" href="css/estilos-login.css">


</head>
<body>

	<div class="container h-100">

		<div class="d-flex justify-content-center h-100">

			<div class="card_login">

				<div class="d-flex justify-content-center">

					<div class="area_logo">

						<a href="index.php"><img src="img/logo.png" class="logo_circular"></a>

					</div>

				</div>

				<div class="d-flex justify-content-center form_login">

					<form action="autenticar.php" method="post">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="far fa-user"></i></span>
								</div>
								<input type="text" name="usuario" class="form-control input_usuario" placeholder="Usuário" required>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></i></i></span>
								</div>
								<input type="password" name="senha" class="form-control input_usuario" placeholder="Senha" required>
							</div>

							<div class="input-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="" class="custom-control-input" id="customControlInline">
									<label class="custom-control-label" for="customControlInline">Lembrar-me</label>
								</div>
								
							</div>

						

							</div>

							<div class="d-flex justify-content-center mt-3 area_botao">
								<button type="submit" name="button" class="btn btn_login">
								Login</button>

							</div>

				</form>

				<div class="mt-4 area_links">
					<div class="d-flex justify-content-center links">
						Não possui cadastro? <a href="#" data-toggle="modal" data-target="#modalExemplo" class="ml-2">Cadastre-se</a>
					</div>
					<div class="d-flex justify-content-center links">
						 <a href="#" class="ml-2">Recuperar Senha</a>
					</div>
				</div>



			</div>

		</div>


	</div>




<!-- Modal -->
      <div id="modalExemplo" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              
              <h5 class="modal-title">Usuários</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">

              <div class="form-group">
                <label for="id_produto">Nome</label>
                <input type="text" class="form-control mr-2" name="nome" placeholder="Nome" required>
              </div>

                <div class="form-group">
                <label for="id_produto">CPF</label>
                <input type="text" class="form-control mr-2" name="cpf" placeholder="CPF" id="cpf" required>
              </div>

              <div class="form-group">
                <label for="id_produto">Email</label>
                <input type="email" class="form-control mr-2" name="usuario" placeholder="Usuário" required>
              </div>

               <div class="form-group">
                <label for="fornecedor">Senha</label>
                 <input type="text" class="form-control mr-2" name="senha" placeholder="Senha" required>
              </div>

               <div class="form-group">
                <label for="fornecedor">Nível</label>
                  <select class="form-control mr-2" id="category" name="nivel">
                                                            
                    <option value="Aluno">Aluno</option> 
                    <option value="Professor">Professor</option> 
                       
               </select>
              </div>

             
            
               
             
            </div>
                   
            <div class="modal-footer">
               <button type="submit" class="btn btn-success mb-3" name="salvar">Salvar </button>


                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">Cancelar </button>
            </form>
            </div>
          </div>
        </div>
      </div>    



</body>
</html>



<!--TESTAR AUTENTICACAO -->
<?php 
	if(isset($_SESSION['nao_autenticado'])){
		echo "<script language='javascript'>window.alert('Usuário ou senha incorretos!!'); </script>";

	}

		unset($_SESSION['nao_autenticado']);

 ?>




<!--CADASTRO -->

<?php 
	if(isset($_POST['salvar'])){
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$nivel = $_POST['nivel'];


		//VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
		$query_verificar_cpf = "SELECT * from usuarios where cpf = '$cpf' ";
		$result_verificar_cpf = mysqli_query($conexao, $query_verificar_cpf);
		$row_verificar_cpf = mysqli_num_rows($result_verificar_cpf);
		if($row_verificar_cpf > 0){
			echo "<script language='javascript'>window.alert('CPF já Cadastrado'); </script>";
			exit();
		}


		//VERIFICAR SE O USUARIO JÁ ESTÁ CADASTRADO
		$query_verificar_usu = "SELECT * from usuarios where usuario = '$usuario' and nivel = '$nivel' ";
		$result_verificar_usu = mysqli_query($conexao, $query_verificar_usu);
		$row_verificar_usu = mysqli_num_rows($result_verificar_usu);
		if($row_verificar_usu > 0){
			echo "<script language='javascript'>window.alert('Usuário já Cadastrado'); </script>";
			exit();
		}



		$query = "INSERT INTO usuarios (nome, cpf, usuario, senha, nivel, data) values ('$nome', '$cpf', '$usuario', '$senha', '$nivel', curDate())";

		$result = mysqli_query($conexao, $query);


		//INSERINDO NA TABELA DE ALUNOS
		    if($nivel == 'Aluno'){

		      $query_alunos = "INSERT INTO alunos (nome, cpf, email, senha, foto, data) values ('$nome', '$cpf', '$usuario', '$senha', 'sem-perfil.png', curDate())";

		      $result_alunos = mysqli_query($conexao, $query_alunos);


		    }
    

		if($result == ''){
			echo "<script language='javascript'>window.alert('Ocorreu um erro ao Salvar!'); </script>";
		}else{
			echo "<script language='javascript'>window.alert('Cadastrado com Sucesso!'); </script>";
			echo "<script language='javascript'>window.location='login.php'; </script>";

		}
		
	}
 ?>



<!--MASCARAS -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone').mask('(00) 00000-0000');
      $('#cpf').mask('000.000.000-00');
      });
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

