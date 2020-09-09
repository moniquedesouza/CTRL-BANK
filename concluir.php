<?php
	
	include_once "conexao.php";

	$cartao = $_POST['cartao'];
	$cod_seg = $_POST['cod_seg'];
	$senha	= $_POST['senha'];
	$confirmar_senha = $_POST['confirmar_senha'];
	$query = "update contas set senha = '$senha' where cartao ='$cartao'";

	if ($senha == $confirmar_senha){

	$resultado = @mysqli_query($conexao, $query);

	}

	if ($resultado) {

		echo '<script language="javascript">';
		echo 'alert("Cadastro Concluido!!")';
		echo '</script>';

	} else {

		die('Falha no cadastção! ' . @mysqli_error($conexao));

	}

@mysqli_close($conexao);

?>

<script language= "JavaScript">
window.location="index.html";
</script>
?>