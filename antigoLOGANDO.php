<!DOCTYPE html>
<html>
<head>
    <title>Logando...</title>
    
    <!-- Incluir o CSS do Bootstrao -->
    <link rel="stylesheet"  href="css/bootstrap.css" media="screen">
</head>

<?php

include 'conexao.php';  // connect database.

session_start();
$num_conta=$_POST['num_conta'];
$senha=$_POST['senha'];
$sql = mysql_query("select * from contas where num_conta = '$num_conta' and senha = '$senha' ") or die (mysql_error()) ;
//contar linhas
$row = mysql_num_rows($sql);
if ( $row > 0 ) {
    $_SESSION['num_conta']=$num_conta=$_POST['num_conta'];
    $_SESSION['senha']=$senha=$_POST['senha'];
    header('location:logando.php');
}
else{
  header("location:index.html?senha='senhaincorreta'");
}
?>
 <!-- Incluir o jQuery que é requisito do JavaScript do Bootstrap -->
    <script src="http://code.jquery.com/jquery-later.js"></script>
    <!-- Incluir o JavaScript do Bootstrap -->
    <script src="js/bootstrap.js"></script>
</body>
</html>