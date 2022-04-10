
<?php

//colocar conexão aqui
$pdo= new PDO('mysql:host=localhost;dbname=dbloja', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


class Cliente {
    
    //    `id` int(11) NOT NULL,
    private int $id=0;
    //    `nome` varchar(255) COLLATE utf8_bin NOT NULL,
    private string $nome="";
    //    `cpf_cnpj` varchar(14) COLLATE utf8_bin NOT NULL,
    private string $cpf_cnpj="";
    //    `email` varchar(255) COLLATE utf8_bin NOT NULL,
    private string $email="";
    //    `criacao` varchar(255) COLLATE utf8_bin NOT NULL,
    private string $criacao="";
    //    `modificado` varchar(255) COLLATE utf8_bin NOT NULL,
    private string $modificado="";
    
    function create(){}
    function read(){}
    function update(){}
    function delete(){}
}

class Produto{
    function create(){}
    function read(){}
    function update(){}
    function delete(){}

}
class Vendas{
    function create(){}
    function read(){}
    function update(){}
    function delete(){}

}

class Usuarios{
    function create(){}
    function read(){}
    function update(){}
    function delete(){}

}

class Perfil{
    function create(){}
    function read(){}
    function update(){}
    function delete(){}

}
?>
