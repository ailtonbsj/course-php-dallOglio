<?php 

final class TSqlUpdate extends TSqlInstruction {
	public function setRowData($column, $value) {
		if(is_string($value)) {
			$value = addslashes($value);
			$this->columnValues[$column] = "'$value'";
		} else if(is_bool($value)) {
			$this->columnValues[$column] = $value ? 'TRUE' : 'FALSE';
		} else if(isset($value)) {
			$this->columnValues[$column] = $value;
		} else {
			$this->colunmValues[$column] = "NULL";
		}
	}
	public function getInstruction() {
		$this->sql = "UPDATE {$this->entity}";
		if($this->columnValues) {
			foreach ($this->columnValues as $column => $value) {
				$set[] = "{$column} = {$value}";
			}
		}
		$this->sql .= ' SET ' . implode(', ', $set);
		if($this->criteria) {
			$this->sql .= ' WHERE ' . $this->criteria->dump();
		}
		return $this->sql;
	}
}

 ?>