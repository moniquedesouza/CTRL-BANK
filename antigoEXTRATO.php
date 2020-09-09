<head>
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
</head>
<style>
body {
background-image: url(assets/images/fundinho.png);
}
</style>
<center>
<?php
  session_start();
  echo '<font color="white">EXTRATO';
  echo '<br>';
  echo '<br>';
  echo 'Conta: ' . $_SESSION['num_conta'];
  echo '<br>';
          // Consultar saldo
          include_once "conexao.php";

          $num_conta = $_SESSION['num_conta'];

          $query = mysqli_query($conexao,"select * from extrato where numconta = '$num_conta'");
          $row = mysqli_num_rows($query);
          if ( $row > 0 ) {
          if (!$query){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
            echo "<br>";
              echo "<font color='white' size='5' face='Verdana'>Ação       Data</font>";
              echo "<br>";

              while ($dados=mysqli_fetch_array($query)){
                $testar = $dados['action'];
                if ($testar == 'Somar'){
                  echo "";
                echo "<font color='#66ff1a' size='5' face='Verdana'>" . $dados['message'] . " </font>    ";
                echo "<font color='white' size='5' face='Verdana'>" . $dados['data'] . "</font>";
                echo "<br>";
                } else {
                echo "";
                echo "<font color='#ff0000' size='5' face='Verdana'>" . $dados['message'] . " </font>    ";
                echo "<font color='white' size='5' face='Verdana'>" . $dados['data'] . "</font>";
                echo "<br>";
              }
              }
            } else {
              echo "<br>";
              echo "<br>";
              echo '<h3>SEM TRANSAÇÃO REGISTRADA</h3>';
            }

              mysqli_close($conexao);
  ?>
  <br>
  <br>
  <a href="menu.php">Retornar ao Menu!</a>
    
  </center>