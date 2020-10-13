<?php

interface crudContato{
	public function create();
	public function read($search);
	public function update($nome,$telefone,$email,$id);
	public function delete($id);
}