<?php
require 'Database.php';

class User {
	private $conn = null;

	public function Connect(){
		$this->conn = new Database();
		return $this->conn->Connect();
	}
}