<?php

session_start();
require_once 'crudContato.php';
class Contato extends Connection implements crudContato{

	//Atributos
	private $id, $nome,$telefone,$email;

	//Métodos Set
	protected function setId($id){
		$this->id = $id;
	}
	protected function setNome($nome){
		$this->nome = $nome;
	}
	protected function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	protected function setEmail($email){
		$this->email = $email;
	}

	//Métodos Get
	protected function getId(){
		return $this->id;
	}
	protected function getNome(){
		return $this->nome;
	}
	protected function getTelefone(){
		return $this->telefone;
	}
	protected function getEmail(){
		return $this->email;
	}

	//Método para manipular os Set do formulário cadastro
	public function dadosDoForm($nome,$telefone,$email){
		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setEmail($email);

	}

	public function create(){
		$_nome = $this->getNome();
		$_telefone = $this->getTelefone();
		$_email = $this->getEmail();

		$conn = $this->connect();

		$sql = "insert into tb_contato values(default,:nome,:telefone,:email)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':nome',$_nome);
		$stmt->bindParam(':telefone',$_telefone);
		$stmt->bindParam(':email',$_email);

		if ($stmt->execute()) {
			$_SESSION['sucesso'] = "Cadastrado com sucesso!";
			$destino = header("Location:../../public/home.php");
		}else{
			$_SESSION['erro'] = "Falha ao cadastrar!";
			$destino = header("Location:../../public/home.php");
		}
	}
	public function read($search){

	}
	public function update($nome,$telefone,$email,$id){

	}
	public function delete($id){

	}
}