<!DOCTYPE html>
<html>
<head>
	<title>Transferência</title>
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
// Consultar saldo
          session_start();
          include_once "conexao.php";

          $num_conta = $_SESSION['num_conta'];

          $query = mysqli_query($conexao,"select saldo from contas where num_conta = '$num_conta'");

          if (!$query){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
          $dados=mysqli_fetch_array($query);

  echo '<font color="white">Saldo:</font>     <font color="#FFFF00" size="5">R$' . $dados['saldo'] . '</font>';
  echo '<br>';
  echo '<br>';
  ?>
	<form class="form-horizontal" action="transfer.php" method="post">
<fieldset>

<!-- Form Name -->
<legend><font color="white">TRANSFERIR</font></legend>

<!-- Text input-->
<div class="form-group">
  <font color="white"><label class="col-md-4 control-label" for="destinatario">Conta do Destinatário:</label> </font> 
  <div class="col-md-4">
  <input id="destinatario" name="destinatario" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <font color="white"><label class="col-md-4 control-label" for="valor">Valor:</label> </font> 
  <div class="col-md-4">
  <input id="valor" name="valor" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <font color="white"><label class="col-md-4 control-label" for="senha">Senha:</label></font>
  <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="concluir"></label>
  <div class="col-md-4">
    <button id="concluir" name="concluir" class="btn btn-primary">Concluir Transferência</button>
  </div>
</div>

</fieldset>
</form>
<a href="menu.php">Retornar ao Menu!</a>
</center>
</body>
</html>