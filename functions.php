<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('customers');
}
class Produto{
	public $id;
	public $codigo; // barcode EAN-13(gtin), caso não tenha usar um interno
	private $descricao;
	protected $preco;
	public $quantidade;
	public $validade;
	public $fabricante;
}

class Cliente{
	public $id;
	public $nome;
	//private $senha;
}

class Fornecedor{

}

class Carrinho{
	
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
 }
function validarURL($url){
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
   return "URL inválida";
} else{
	return "ok";
}}
// para commit de atualização
?>