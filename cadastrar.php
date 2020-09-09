<?php
	
	include_once "conexao.php";

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$rg	= $_POST['rg'];
	$data_nasc	= $_POST['data_nasc'];
	$cidade	= $_POST['cidade'];
	$endereco	= $_POST['endereco'];
	$numero_casa	= $_POST['numero_casa'];
	$email	= $_POST['email'];
	$telefone	= $_POST['telefone'];
	$celular	= $_POST['celular'];


	$sqlinsert = "insert into clientes(nome,cpf,rg,data_nasc,id_cidade,endereco,numero_casa,email,telefone,celular,data_cad,status) values ('$nome','$cpf','$rg','$data_nasc','$cidade','$endereco','$numero_casa','$email','$telefone','$celular','2000-01-01','0')";

	$resultado = @mysqli_query($conexao,$sqlinsert);


	if ($resultado) {
	echo "Cadastro realizado com sucesso!";

	}
	else{
		echo '<script language="javascript">';
    echo 'alert("Seu cadastro foi recusado, tente novamente!!")';
    echo '</script>';
	}
	mysqli_close($conexao);
?>
<?php
session_start();
session_destroy();
echo '<script language="javascript">';
    echo 'alert("Seu cadastro foi encaminhado para aprovação!!")';
    echo '</script>';
?>
<script language= "JavaScript">
window.location="index.html";
</script>