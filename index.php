<?php 

require_once("config.php");

$sql = new Sql();

$produtos = $sql->select("SELECT * FROM produtos");

echo json_encode($produtos);

?>