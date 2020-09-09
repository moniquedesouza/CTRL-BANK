<?php
// Conexão
 include_once('conexao.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <title> Editar Clientes</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="css/materialize.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head> 


<?php
// Selecionando o ID do produto a ser Editado/Alterado
if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
	$id_consultar = $dados['id'];
}
?>

<body>
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>

		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">

			<div class="input-field col s12">
				<input type="text" name="id" id="id" value="<?php echo $dados['id'];?>">
				<label for="id">Codigo</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="produto" value="<?php echo $dados['nome'];?>" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['data_nasc'];?>" name="data_nasc" id="data_nasc">
				<label for="data_nasc">Data de Nascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cpf'];?>" name="cpf" id="cpf">
				<label for="cpf">CPF</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['rg'];?>" name="rg" id="rg">
				<label for="rg">RG</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['endereco'];?>" name="endereco" id="endereco">
				<label for="endereco">Endereço</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['id_cidade'];?>" name="id_cidade" id="id_cidade">
				<label for="id_cidade">Cidade</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['numero_casa'];?>" name="numero_casa" id="numero_casa">
				<label for="numero_casa">Número</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['telefone'];?>" name="telefone" id="telefone">
				<label for="telefone">Telefone</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['celular'];?>" name="celular" id="celular">
				<label for="celular">Celular</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['email'];?>" name="endereemailco" id="email">
				<label for="email">E-mail</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['data_cad'];?>" name="data_cad" id="data_cad">
				<label for="data_cad">Data de Cadastro</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['status'];?>" name="status" id="status">
				<label for="status">Status</label>
			</div>

			Criar Conta:
			<?php
// Selecionando o ID do produto a ser Editado/Alterado
	
	$sql2 = "SELECT * FROM contas WHERE id_cliente = '$id_consultar'";
	$resultado2 = mysqli_query($conexao, $sql2);
	$dados2 = mysqli_fetch_array($resultado2);
?>
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados2['num_conta'];?>" name="num_conta" id="num_conta">
				<label for="num_conta">Número da conta</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados2['contas.cartao'];?>" name="cartao" id="cartao">
				<label for="cartao">Cartão</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados2['cod_seg'];?>" name="cod_seg" id="cod_seg">
				<label for="cod_seg">Código de Segurança</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados2['senha'];?>" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Aceitar</button>
		</form>
		
	</div>
</div>

 <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  
 </body>
</html>