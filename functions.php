
<?php

//colocar conexão aqui
$pdo= new PDO('mysql:localhost;dbname=dbloja', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


class Cliente {
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
