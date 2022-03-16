<?php
class Produto{
	private $idproduto;
	private $codigo; // barcode EAN-13(gtin), caso não tenha usar um interno
	private $descproduto;
	private $valorunitario;
	private $quantidade;
	private $validade;
	private $fabricante;
    
    function __contruct($id, $codigo, $descricao, $preco, $quantidade, $validade, $fabricante){
        $this->id=$id;
        $this->codigo=$codigo;
        $this->descricao=$descricao;
        $this->preco=$preco;
        $this->quantidade=$quantidade;
        $this->validade=$validade;
        $this->fabricante=$fabricante;
    }
}


?>