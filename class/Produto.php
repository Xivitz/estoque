<?php 

	class Produto {

		public $id;
		public $nome;
		public $quantidade;
		public $dtEntrada;
		public $descricao;

		function valorComDesconto () {
			$this->preco -= $this->preco * 0.1;
			return $this->preco;
		}
	}

 ?>