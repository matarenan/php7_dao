<?php 

class Produtos {

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

	//LISTAR CONTEÚDO DO BANCO DE DADOS:
	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM produtos ORDER BY nome");

	}

	public static function search($nome) {

		$sql = new Sql();

		return $sql->select("SELECT * FROM produtos WHERE nome LIKE :SEARCH ORDER BY nome", array(
			':SEARCH'=>"%".$nome."%"
		));

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