<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADO Select</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
<?php 

function __autoload($classe) {
	if(file_exists("lib/{$classe}.class.php")) {
		include_once "lib/{$classe}.class.php";
	}
}

$criteria = new TCriteria;
$criteria->add(new TFilter('nome', 'LIKE', 'maria%'));
$criteria->add(new TFilter('cidade', 'LIKE', 'porto%'));
$criteria->setProperty('offset', 10);
$criteria->setProperty('limit', 10);
$criteria->setProperty('order', 'nome');

$sql = new TSqlSelect;
$sql->setEntity('aluno');
$sql->addColumn('nome');
$sql->addColumn('fone');
$sql->setCriteria($criteria);

echo $sql->getInstruction();

 ?>
</pre>
</body>
</html>