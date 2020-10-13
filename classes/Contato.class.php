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

	public function dadosDaTabela($id){
		$conn = $this->connect();

		$this->setId($id);
		$_id = $this->getId();

		$sql = "select * from tb_contato where id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id',$_id);
		$stmt->execute();

		$resultado = $stmt->fetchAll();

		foreach ($resultado as $value) {
			require_once '../forms/form-edit-contato.php';
		}
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
		$conn = $this->connect();

		$search = $search . '%';

		$sql = "select c.id, c.nome, c.telefone, c.email from tb_contato c where c.nome like :search order by c.nome";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':search', $search);
		$stmt->execute();

		$resultado = $stmt->fetchAll();

		foreach ($resultado as $value) {

			$this->setId($value['id']);
			$_id = $this->getId();

			echo "<tr>";

			echo "<td>".$value['nome']."</td>";
			echo "<td>".$value['telefone']."</td>";
			echo "<td>".$value['email']."</td>";

			echo "<td><a href='contato-edit.php?id=$_id'><i class='material-icons left'>edit</i>Editar</a></td>";
			echo "<td><a href='../database/agenda/delete.php?id=$_id'><i class='material-icons left'>delete</i>Deletar</a></td>";

			echo "</tr>";
		}

	}
	public function update($nome,$telefone,$email,$id){
		$conn = $this->connect();

		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setEmail($email);
		$this->setId($id);

		$_nome = $this->getNome();
		$telefone = $this->getTelefone();
		$_email = $this->getEmail();
		$_id = $this->getId();

		$sql = "update tb_contato set nome = :nome, telefone = :tel, email = :email where id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':nome',$_nome);
		$stmt->bindParam(':tel',$telefone);
		$stmt->bindParam(':email',$_email);
		$stmt->bindParam(':id',$_id);

		$stmt->execute();

		$destino = header("Location: ../../public/home.php");
	}
	public function delete($id){
		$conn = $this->connect();

		$this->setId($id);
		$_id = $this->getId();

		$sql = "delete from tb_contato where id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $_id);
		$stmt->execute();

		$destino = header("Location: ../../public/home.php");
	}
}