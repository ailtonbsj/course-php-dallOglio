<?php

include_once 'contato.class.php';

class Fornecedor {
	var $codigo;
	var $razaoSocial;
	var $endereco;
	var $cidade;
	var $contato;

	function __construct() {
		$this->contato = new Contato;
	}
	function setContato($nome, $telefone, $email) {
		$this->contato->setContato($nome, $telefone, $email);
	}
	function getContato() {
		return $this->contato->getContato();
	}
}

 ?>