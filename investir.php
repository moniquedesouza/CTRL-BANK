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
						<h2>INVESTIMENTOS</h3>
					</span>

					<center>
  <?php
  session_start();
  echo 'Conta: ' . $_SESSION['num_conta'];
  echo '<br>';
          // Consultar saldo
          include_once "conexao.php";

          $num_conta = $_SESSION['num_conta'];

           $query3 = mysqli_query($conexao,"select saldo from contas where num_conta = '$num_conta'");
           if (!$query3){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
          $dados3=mysqli_fetch_array($query3);

           echo 'Saldo:    <font color="#339933" size="5"><b>R$' . $dados3['saldo'] . '</b></font>';
  	 		echo '<br>';
         
          // Minhas Ações
          $query2 = mysqli_query($conexao,"select * from investimentos inner join acoes on investimentos.id_acao = acoes.id inner join contas on investimentos.id_conta = contas.id where contas.num_conta = '$num_conta'");
          $row2 = mysqli_num_rows($query2);
          if ( $row2 > 0 ) {
          if (!$query2){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
            echo "<br>";
              echo "<a class='btn btn-sm btn-success display-4' href='investir.php'>MINHAS AÇÕES</a>";
              echo "<br>";
              echo "<center>";
              echo "<table border='1px' bordercolor='white'>";
              echo "<tr>
                	<th width='250px'><font color='black'>Ação </font></th>
               	 	<th width='100px'><font color='black'>Investido</font></th>
               	 	<th width='100px'></th>
              		</tr>";

              while ($dados2=mysqli_fetch_array($query2)){
              	echo "<tr>";
                echo "<td><font color='#339933' size='2' face='Verdana'>" . $dados2['nome'] . "    </font></td>";
                echo "<td><font color='black' size='2' face='Verdana'> R$" . $dados2['investido'] . "</font></td>";
                echo "<td><a href=''>RESGATAR</a></td>";
                echo "</tr>";
              }
              	echo "</table>";
                echo "</center>";
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
              echo "<a class='btn btn-sm btn-success display-4' href='investir.php'>AÇÕES DISPONÍVEIS</a>";
              echo "<center>";
              echo "<table border='1px' bordercolor='white'>";
              echo "<tr>
                <th width='300px'>Ação</th>
                <th width='100px'>Código</th>
                <th width='100px'>Taxa</th>
                <th width='100px'></th>
              	</tr>";

              while ($dados=mysqli_fetch_array($query)){
              	echo "<tr>";
                echo "<td><font color='#3399ff' size='2' face='Verdana'>" . $dados['nome'] . " </font></td>";
                echo "<td><font color='black' size='2' face='Verdana'>" . $dados['cod'] . "</font></td>";
                echo "<td><font color='black' size='2' face='Verdana'>" . $dados['taxa'] . "%</font></td>";
                echo "<td><a href='". $dados['link'] ."'>+INFO</a></td>";
                echo "</tr>";
              }
              	echo "</table>";
                echo "</center>";
            } 

              mysqli_close($conexao);
  ?>
  </center>
  <center>
  <br>
  <br>
  <a href="menu.php">Retornar ao Menu!</a>
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