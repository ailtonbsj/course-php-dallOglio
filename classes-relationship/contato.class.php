<?php 

class Contato {
	var $nome;
	var $telefone;
	var $email;

	function setContato($nome, $telefone, $email) {
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->email = $email;
	}
	function getContato() {
		return "Nome: {$this->nome}\n" .
			"Telefone: {$this->telefone}\n" .
			"Email: {$this->email}";
	}
}

 ?>