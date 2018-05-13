<?php 

class TCriteria extends TExpression {
	private $expressions;
	private $operators;
	private $properties;

	public function add(TExpression $expression, $operator = self::AND_OPERATOR) {
		if(empty($this->expressions)) {
			unset($operator);
		}
		$this->expressions[] = $expression;
		if(isset($operator)) {
			$this->operators[] = $operator;
		} else $this->operators[] = NULL;
	}

	public function dump(){
		if(is_array($this->expressions)) {
			$result = '';
			foreach ($this->expressions as $i => $expression) {
				$operator = $this->operators[$i];
				$result .= $operator . $expression->dump() . ' ';
			}
			$result = trim($result);
			return "({$result})";
		}
	}

	public function setProperty($property, $value) {
		$this->properties[$property] = $value;
	}

	public function getProperty($property) {
		return $this->properties[$property];
	}
}

 ?>