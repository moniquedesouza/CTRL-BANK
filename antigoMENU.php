<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/captura-de-tela-126-118x104.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
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

  <style>
body {
background-image: url(assets/images/fundinho.png);
}
</style>
</head>
<body>
  <center>
  <?php
  session_start();
  echo '<font color="white">Bem-Vindo(a) [Usuário]';
  echo '<br>';
  echo '<br>';
  echo 'Conta: ' . $_SESSION['num_conta'];
  echo '<br>';
          // Consultar saldo
          include_once "conexao.php";

          $num_conta = $_SESSION['num_conta'];

          $query = mysqli_query($conexao,"select saldo from contas where num_conta = '$num_conta'");

          if (!$query){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
          $dados=mysqli_fetch_array($query);

  echo 'Saldo:    <font color="#FFFF00" size="5">R$' . $dados['saldo'] . '</font>';
  echo '<br>';
  echo '<br></font>';
  ?>

	<h2 class="mbr-section-title pb-2 mbr-fonts-style display-2"><strong><font color="white">PAINEL DO CLIENTE</font>&nbsp;</strong><strong></strong></h2>

	<a class="btn btn-sm btn-success display-4" href="menu.php">INVESTIMENTO</a>
		<br>
	<a class="btn btn-sm btn-success display-4" href="transferir.php">TRANSFERÊNCIA</a>
		<br>
	<a class="btn btn-sm btn-success display-4" href="extrato.php">EXTRATO</a>
<br>
<a href="logout.php">Encerrar sessão!</a>
</center>
</body>
</html>