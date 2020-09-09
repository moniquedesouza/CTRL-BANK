<?php

	$servidor = 'localhost';
	$usuario  =  'root';
	$senha	  =  'etecjau';
	$banco	  =  'ctrlbank';

	$conexao = @mysqli_connect($servidor,$usuario,$senha,$banco)
	or die ("Problemas com a conexao do banco de Dados");

	?>