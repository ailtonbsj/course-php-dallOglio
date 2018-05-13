<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregacao</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
<?php 

include_once 'cesta.class.php';
include_once 'produto.class.php';

$produto1 = new Produto;
$produto2 = new Produto;
$produto3 = new Produto;

$produto1->codigo = 1;
$produto1->descricao = 'Ameixa';
$produto1->preco = 1.40;

$produto2->codigo = 2;
$produto2->descricao = 'Morango';
$produto2->preco = 2.24;

$produto3->codigo = 3;
$produto3->descricao = 'Abacaxi';
$produto3->preco = 2.86;

$cesta = new Cesta;
$cesta->adicionaItem($produto1);
$cesta->adicionaItem($produto2);
$cesta->adicionaItem($produto3);

print_r($cesta);
echo "\n\n";
echo $cesta->calculaTotal();

 ?>
</pre>
</body>
</html>