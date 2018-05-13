<?php 

class Cesta {
	private $itens;

	function adicionaItem(Produto $item) {
		$this->itens[] = $item;
	}
	
	function calculaTotal() {
		$total = 0;
		foreach ($this->itens as $item) {
			$total += $item->preco;
		}
		return 'Total: R$ ' . $total;
	}
}

 ?>