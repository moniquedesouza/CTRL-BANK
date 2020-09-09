 <?php
  session_start();
  $num_conta = $_SESSION['num_conta'];
  if ($num_conta > 0){
  		header('Location: menu.php');

} else {
		header('Location: login.html');
	}
  ?>