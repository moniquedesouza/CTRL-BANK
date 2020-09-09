<?php
	include "conexao.php";
	session_start();
	$conta = $_SESSION['num_conta'];
	$destinatario = $_POST['destinatario'];
	$valor = $_POST['valor'];
	$senha = $_POST['senha'];

          $query = "select * from contas where num_conta = '$conta' and senha = '$senha'";

$resultado = @mysqli_query($conexao, $query);

$row = mysqli_num_rows($resultado);
if ( $row > 0 ) {

  echo 'Saldo:    <font color="#FFFF00" size="5">R$' . $dados['saldo'] . '</font>';
  echo '<br>';
  echo '<br></font>';

  $omg = $dados['saldo'];

  if ($omg < $valor){
		echo '<script language="javascript">';
		echo 'alert("Sem Dinheiro.")';
		echo '</script>';

		echo '<script language= "JavaScript">';
		echo 'window.location="transferir.php";';
		echo '</script>';
	}


	$query1 = "update contas set saldo = saldo +'$valor' where num_conta = '$destinatario'";
	$query2 = "update contas set saldo = saldo -'$valor' where num_conta = '$conta'";
	$query3 = "insert into extrato (numconta,message,action,data) values ('$conta','- R$$valor','Subtrair','2001-01-01')";
	$query4 = "insert into extrato (numconta,message,action,data) values ('$destinatario','+ R$$valor','Somar','2001-01-01')";

	$resultado = @mysqli_query($conexao,$sqlinsert);

	$resultado = @mysqli_query($conexao, $query1);
	$resultado2 = @mysqli_query($conexao, $query2);
	$resultado3 = @mysqli_query($conexao, $query3);
	$resultado4 = @mysqli_query($conexao, $query4);

		echo '<script language="javascript">';
		echo 'alert("Transferência Realizada com sucesso!")';
		echo '</script>';

		echo '<script language= "JavaScript">';
		echo 'window.location="menu.php";';
		echo '</script>';

		@mysqli_close($conexao);
          } else {
          	echo '<script language="javascript">';
		echo 'alert("Senha Incorreta!! tente novamente.")';
		echo '</script>';

		echo '<script language= "JavaScript">';
		echo 'window.location="transferir.php";';
		echo '</script>';
          }


?>