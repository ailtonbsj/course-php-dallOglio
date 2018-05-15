<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADO Log</title>
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
	TTransaction::open('my_livro');
	//Log1
	TTransaction::setLogger(new TLoggerHTML('/tmp/log.html'));
	TTransaction::log("Inserindo registro Will");
	$sql = new TSqlInsert;
	$sql->setEntity('famosos');
	$sql->setRowData('codigo', 9);
	$sql->setRowData('nome', 'Willian');
	$conn = TTransaction::get();
	$result = $conn->Query($sql->getInstruction());
	TTransaction::log($sql->getInstruction());

	//Log2
	TTransaction::setLogger(new TLoggerXML('/tmp/log.xml'));
	TTransaction::log("Inserindo registro Einstein");
	$sql = new TSqlInsert;
	$sql->setEntity('famosos');
	$sql->setRowData('codigo', 10);
	$sql->setRowData('nome', 'Einstein');
	$conn = TTransaction::get();
	$result = $conn->Query($sql->getInstruction());
	TTransaction::log($sql->getInstruction());

	TTransaction::close();
} catch (Exception $e) {
	echo $e->getMessage();
	TTransaction::rollback();
	TTransaction::log("{$e->getMessage()}");
}

 ?>
</pre>
</body>
</html>