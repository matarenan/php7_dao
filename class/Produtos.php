<?php 

class Usuario {

	private $id;
	private $nome;
	private $preco;

	public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($value){
		$this->nome = $value;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($value){
		$this->preco = $value;
	}

	public function loadById($id){

		$sql = new Sql();

		$result = $sql->select("SELECT * FROM produtos WHERE id = :ID", array(

			":ID"=>$id

		));

		if(count($result)>0){

			$row = $result[0];

			$this->setId($row['id']);
			$this->setNome($row['nome']);
			$this->setPreco($row['preco']);

		}
	}

	public function __toString(){

		return json_encode(array(
			"id"=>$this->getId(),
			"nome"=>$this->getNome(),
			"preco"=>$this->getPreco()
		));

	}
}

?>