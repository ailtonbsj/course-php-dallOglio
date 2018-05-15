<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADO Transaction</title>
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

try {	
	$sql = new TSqlInsert;
	$sql->setEntity('famosos');
	$sql->setRowData('codigo', 8);
	$sql->setRowData('nome', 'Galileu');

	TTransaction::open('my_livro');
	$conn = TTransaction::get();
	$result = $conn->Query($sql->getInstruction());

	$sql = new TSqlUpdate;
	$sql->setEntity('famosos');
	$sql->setRowData('nome', 'Galileu Galilei');
	$criteria = new TCriteria;
	$criteria->add(new TFilter('codigo', '=', '8'));
	$sql->setCriteria($criteria);

	$conn = TTransaction::get();
	$result = $conn->Query($sql->getInstruction());
	TTransaction::close();

} catch (Exception $e) {
	echo $e->getMessage();
	TTransaction::rollback();
}

 ?>
</pre>
</body>
</html>