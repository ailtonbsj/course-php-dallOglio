<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Composicao</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
<?php 

include_once 'fornecedor.class.php';

$fornecedor = new Fornecedor;
$fornecedor->razaoSocial = 'Produtos Bom Gosto S. A.';

$fornecedor->setContato('Mauro', '1234-5678', 'mauro@bomgosto.br');

print_r($fornecedor);
echo "\n\n";
echo $fornecedor->getContato();

 ?>
</pre>
</body>
</html>