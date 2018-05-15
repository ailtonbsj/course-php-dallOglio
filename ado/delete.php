<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADO Delete</title>
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
$criteria->add(new TFilter('id', '=', '3'));

$sql = new TSqlDelete;
$sql->setEntity('aluno');
$sql->setCriteria($criteria);

echo $sql->getInstruction();

 ?>
</pre>
</body>
</html>