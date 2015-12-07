<?php
class Database {
	private $conn   = null;
	private $config = array();

    public function Connect(){
        try {
            $this->config = $this->parse();
            var_dump($this->config);
            $this->conn = new PDO("mysql:host =".$this->config['host'].";dbname = .".$this->config['dbname'],
            $this->config['username'], $this->config['password']);
       
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return "Connected successfully"; 
            
            }
        catch(PDOException $e)
        {
            return "Connection failed: " . $e->getMessage();
        }
    }
    public function Disconnect(){
            $conn = null;
            return 'Connection closed';
    }

	public function parse(){
		$this->config = parse_ini_file("../app/config.ini");
		return $this->config;
	}
}