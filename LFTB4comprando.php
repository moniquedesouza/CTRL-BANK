<?php
$quantidade = $_POST['quantidade'];

session_start();
          // Pegar conta
          include_once "conexao.php";

          $num_conta = $_SESSION['num_conta'];

          $cod = 'LFTB4';

          // Coletar dados da ação

          $query = mysqli_query($conexao,"select * from acoes where cod = '$cod'");
           if (!$query){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
          $dados=mysqli_fetch_array($query);

$valor = $dados['valor'];
$id_acao = $dados['id'];

// Coletar dados da conta

 $query2 = mysqli_query($conexao,"select * from contas where num_conta = '$num_conta'");

           if (!$query2){

            die('<b>Qyerrt Inválida:</b>' . @mysqli_error($conexao));
          }
          $dados2=mysqli_fetch_array($query2);
          $saldo = $dados2['saldo'];

          if ($saldo < $valor){
          	return;
          }
$id_conta = $dados2['id'];

$result = $quantidade * $valor;

$newsaldo = $saldo - $result;

$sqlinsert2 = "update contas set saldo = '$newsaldo' where num_conta = '$num_conta'";

$resultad2 = @mysqli_query($conexao,$sqlinsert2);

$sqlinsert = "insert into investimentos(id_acao,id_conta,data_comeco,data_termino,investido) values ('$id_acao','$id_conta','2001-01-01','2001-01-01','$result')";

	$resultado = @mysqli_query($conexao,$sqlinsert);
	
	if ($resultado) {
	echo '<script language="javascript">';
		echo 'alert("Ações adquiridas!!")';
		echo '</script>';
		header('Location: menu.php');

	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Seu pedido de compra foi recusado!!")';
		echo '</script>';
		header('Location: LFTB4.php');
	}
	mysqli_close($conexao);
?>