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
  echo '<font color="white">INVESTIR';
  echo '<br>';
  echo '<br>';
  echo 'Conta: ' . $_SESSION['num_conta'];
  echo '<br>';
          // Consultar saldo
          include_once "conexao.php";

          $num_conta = $_SESSION['num_conta'];
         
          // Minhas Ações
          $query2 = mysqli_query($conexao,"select * from investimentos inner join acoes on investimentos.id_acao = acoes.id inner join contas on investimentos.id_conta = contas.id where contas.num_conta = '$num_conta'");
          $row2 = mysqli_num_rows($query2);
          if ( $row2 > 0 ) {
          if (!$query2){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
            echo "<br>";
              echo "<font color='ORANGE' size='5' face='Verdana'>MINHAS AÇÕES</font>";
              echo "<br>";
              echo "<center>";
              echo "<table border='1px' bordercolor='white'>";
              echo "<tr>
                <th width='100px'>Ação</th>
                <th width='250px'>Investido</th>
              </tr>";

              while ($dados2=mysqli_fetch_array($query2)){
                echo "<td><font color='#66ff1a' size='5' face='Verdana'>" . $dados2['nome'] . "    </font></td>";
                echo "<td><font color='white' size='5' face='Verdana'> R$" . $dados2['investido'] . "</font></td>";
                echo "<br>";
                echo "</table>";
                echo "</center>";
                echo "____________________________________________________________________________________________________________________";
              }
            } 
          // Comprar Ações
          $query = mysqli_query($conexao,"select * from acoes");

          $row = mysqli_num_rows($query);
          if ( $row > 0 ) {
          if (!$query){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
          echo "<br>";
          echo "<br>";
            echo "<br>";
              echo "<font color='white' size='5' face='Verdana'>LISTA DE AÇÕES DISPONÍVEIS</font>";
              echo "<br>";
              echo "<center>";
              echo "<table border='1px' bordercolor='white'>";
              echo "<tr>
                <th width='100px'>Ação</th>
                <th width='250px'>Código</th>
                <th width='100px'>Taxa</th>
              </tr>";

              while ($dados=mysqli_fetch_array($query)){
                echo "<td><font color='#3399ff' size='5' face='Verdana'>" . $dados['nome'] . " </font></td>                              ";
                echo "<td><font color='white' size='5' face='Verdana'>" . $dados['cod'] . "</font></td>                  ";
                echo "<td><font color='white' size='5' face='Verdana'>" . $dados['taxa'] . "%</font></td>";
                echo "<br>";
                echo "</table>";
                echo "</center>";
              }
            } 

              mysqli_close($conexao);
  ?>
  <br>
  <br>
  <a href="menu.php">Retornar ao Menu!</a>
    
  </center>