<?php 

require_once("config.php");

/*
 JÁ ESTÁ SENDO USADO NA CLASSE Produtos
$sql = new Sql();

$produtos = $sql->select("SELECT * FROM produtos");

echo json_encode($produtos);*/


/* CARREGA UM PRODUTO PELO ID
$root = new Produtos();

$root->loadById(9);

echo $root;
*/

/*
CARREGA A LISTA DO BANCO DE DADOS
$lista = Produtos::getList(); //método estático

echo json_encode($lista);
*/

/*
PROCURA UM DETERMINADO NOME NO BD
$search = Produtos::search("Bolinho");

echo json_encode($search);
*/


?>