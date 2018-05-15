<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADO Criteria</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
<?php 

include_once 'lib/TExpression.class.php';
include_once 'lib/TCriteria.class.php';
include_once 'lib/TFilter.class.php';

$criteria = new TCriteria;
$criteria->add(new TFilter('idade', '<', 16), TExpression::OR_OPERATOR);
$criteria->add(new TFilter('idade', '>', 60), TExpression::OR_OPERATOR);
echo $criteria->dump();
echo "\n\n";

$criteria = new TCriteria;
$criteria->add(new TFilter('idade', 'IN', array(24,25,26)));
$criteria->add(new TFilter('idade', 'NOT IN', array(10)));
echo $criteria->dump();
echo "\n\n";

$criteria = new TCriteria;
$criteria->add(new TFilter('nome', 'LIKE', 'pedro%'), TExpression::OR_OPERATOR);
$criteria->add(new TFilter('nome', 'LIKE', 'maria%'), TExpression::OR_OPERATOR);
echo $criteria->dump();
echo "\n\n";

$criteria = new TCriteria;
$criteria->add(new TFilter('telefone', 'IS NOT', NULL));
$criteria->add(new TFilter('sexo', '=', 'F'));
echo $criteria->dump();
echo "\n\n";

$criteria = new TCriteria;
$criteria->add(new TFilter('uf', 'IN', array('RS', 'SC', 'PR')));
$criteria->add(new TFilter('uf', 'NOT IN', array('AC', 'PI')));
echo $criteria->dump();
echo "\n\n";

$criteria1 = new TCriteria;
$criteria1->add(new TFilter('sexo', '=', 'F'));
$criteria1->add(new TFilter('idade', '>', '18'));
echo $criteria1->dump();
echo "\n\n";

$criteria2 = new TCriteria;
$criteria2->add(new TFilter('sexo', '=', 'M'));
$criteria2->add(new TFilter('idade', '<', '16'));
echo $criteria2->dump();
echo "\n\n";

$criteria = new TCriteria;
$criteria->add($criteria1);
$criteria->add($criteria2, TExpression::OR_OPERATOR);
echo $criteria->dump();
echo "\n\n";

 ?>
</pre>
</body>
</html>