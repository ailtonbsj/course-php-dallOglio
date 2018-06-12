
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADO Connection</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
<?php

function __autoload($classe) {
	if (file_exists("lib/{$classe}.class.php")) {
		include_once "lib/{$classe}.class.php";
	}
}

$sql = new TSqlSelect;
$sql->setEntity('famosos');
$sql->addColumn('codigo');
$sql->addColumn('nome');

try {
	$conn = TConnection::open('pg_livro');
	$result = $conn->query($sql->getInstruction());
	if ($result) {
		$row = $result->fetch(PDO::FETCH_ASSOC);
		echo $row['codigo'] . ' - ' . $row['nome'];
	}
	$conn = null;
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

?>
</pre>
</body>
</html>