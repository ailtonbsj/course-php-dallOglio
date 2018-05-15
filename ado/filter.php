<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADO Filter</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
<?php 

include_once 'lib/TExpression.class.php';
include_once 'lib/TFilter.class.php';

$filter1 = new TFilter('data', '=', '2007-06-02');
echo $filter1->dump();
echo "\n\n";

$filter2 = new TFilter('salario', '>', 3000);
echo $filter2->dump();
echo "\n\n";

$filter3 = new TFilter('sexo', 'IN', array('M','F'));
echo $filter3->dump();
echo "\n\n";

$filter4 = new TFilter('contrato', 'IS NOT', NULL);
echo $filter4->dump();
echo "\n\n";

$filter5 = new TFilter('ativo', '=', TRUE);
echo $filter5->dump();
echo "\n\n";

 ?>
</pre>
</body>
</html>