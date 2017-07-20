<?php 

require_once("config.php");

/*$sql = new Sql();

$produtos = $sql->select("SELECT * FROM produtos");

echo json_encode($produtos); JÁ ESTÁ SENDO USADO NA CLASSE USUÁRIO*/

$root = new Usuario();

$root->loadById(9);

echo $root;

?>