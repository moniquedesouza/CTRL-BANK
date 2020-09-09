<?php

include_once "conexao.php";  // connect database.

session_start();
$num_conta=$_POST['num_conta'];
$senha=$_POST['senha'];
$query = "select * from contas where num_conta = '$num_conta' and senha = '$senha'";

$resultado = @mysqli_query($conexao, $query);

$row = mysqli_num_rows($resultado);
if ( $row > 0 ) {
session_start();
$_SESSION['num_conta'] = $_POST['num_conta'];
$_SESSION['senha'] = $_POST['senha'];;

echo '<script language="javascript">';
		echo 'alert("Login Concluido!!")';
		echo '</script>';
		header('Location: menu.php');

} else {
	echo '<script language="javascript">';
		echo 'alert("Senha Incorreta!!")';
		echo '</script>';
		header('Location: index.html');
	}

?>