<?php
class Produto{
	public $id;
	public $codigo; // barcode EAN-13(gtin), caso não tenha usar um interno
	private $descricao;
	protected $preco;
	public $quantidade;
	public $validade;
	public $fabricante;
}


?>