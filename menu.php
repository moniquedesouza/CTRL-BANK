<!DOCTYPE html>
<html lang="en">
<head>
	<title>Painel de Controle</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets_login/css/main.css">

	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/fundinho.png');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="logando.php" method="post">
					<span>
					</span>


					<span class="login100-form-title p-b-34 p-t-27">
						<h2>PAINEL DO USUÁRIO</h3>
					</span>

					<center>
  <?php
  session_start();
          // Consultar saldo
          include_once "conexao.php";

          $num_conta = $_SESSION['num_conta'];

          $query = mysqli_query($conexao,"select saldo from contas where num_conta = '$num_conta'");
          $query2 = mysqli_query($conexao,"select clientes.nome from contas inner join clientes on contas.id_cliente = clientes.id where num_conta = '$num_conta'");

          if (!$query){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
          $dados=mysqli_fetch_array($query);
          $dados2=mysqli_fetch_array($query2);

     echo '<font color="black">Bem-Vindo(a) ' . $dados2['nome'];
  	 echo '<br>';
  	 echo '<br>';
 	 echo 'Conta: ' . $_SESSION['num_conta'];
  	 echo '<br>';

  	 echo 'Saldo:    <font color="#339933" size="5"><b>R$' . $dados['saldo'] . '</b></font>';
  	 echo '<br>';
  	 echo '<br></font>';
  ?>

	<a class="btn btn-sm btn-success display-4" href="investir.php">INVESTIMENTO</a>
		<br>
	<a class="btn btn-sm btn-success display-4" href="transferir.php">TRANSFERÊNCIA</a>
		<br>
	<a class="btn btn-sm btn-success display-4" href="extrato.php">EXTRATO</a>
	<br>
	___________________________________
	<br>
	<a class="btn btn-sm btn-secondary display-4" href="logout.php">SAIR</a>
<br>
<br>
<font color="gray">Copyright © 2018 ~ 2019 Ctrl Bank
	<br>
Todos os direitos reservados.</font>
</center>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>