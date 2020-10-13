<?php

class Connection{

	private $servDB = 'mysql:host=localhost;dbname=agenda';
	private $user = 'root';
	private $pass = 'Deusefiel';

	public function connect(){
		try{
			$conn = new PDO($this->servDB,$this->user,$this->pass);
			$conn->exec("set names utf8");
			return $conn;
		}catch(PDOException $erro){
			echo $erro->getMessage();
		}
	}
	
}