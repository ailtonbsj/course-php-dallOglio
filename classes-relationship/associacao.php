<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Associacao</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
<?php 

include_once 'fornecedor.class.php';
include_once 'produto.class.php';

// Instancia Fornecedor
$fornecedor = new Fornecedor;
$fornecedor->codigo = 848;
$fornecedor->razaoSocial = 'Bom Gosto Alimentos S.A.';
$fornecedor->endereco = 'Rua Ipiranga';
$fornecedor->cidade = 'Poços de Caldas';

// Instancia Produto
$produto = new Produto;
$produto->codigo = 642;
$produto->descricao = 'Doce de Pêssego';
$produto->preco = 1.24;
$produto->fornecedor = $fornecedor;

//imprime objetos
print_r($fornecedor);
print_r($produto);

 ?>
</pre>
</body>
</html>