<?php 
require 'env.php';

use Envvariable\Envparser;

$env = new Envparser(__DIR__.'\.env');
$env->load();


class Database {
	
	private $connection = null;

	function __construct($errorMode = array()) {
		try {	
			
			$this->connection = new PDO("mysql:host=".getenv('dbhost').";dbname=".getenv('dbname').";", getenv('dbuser'), getenv('dbpassword'));
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		} catch(Exception $e){
			throw new Exception($e->getMessage());
			die();
		}
	}

	private function execPassedQuery($query = '', $parameters = []){
		
		try{
			$statement = $this->connection->prepare($query);
			$statement->execute($parameters);
			return $statement;
		}
		catch(Exception $e){
			throw new Exception($e->getMessage());
			die();
		}
	}

	public function insert($query = '', $parameters = []){
		
		try {
			
			$lastInsertId =  $this->execPassedQuery($query, $parameters);
			return $lastInsertId;
			
		}catch(Exception $e){
			throw new Exception($e->getMessage());
			die();
		} 

	}

	public function select($query = '', $parameters = []){
		$statement = $this->execPassedQuery($query, $parameters);
		return $statement;
	}

	public function update($query = '', $parameters = []){
		$statement = $this->execPassedQuery($query, $parameters);
		return $statement;
	}

	public function delete($query = '', $parameters = []){
		$statement = $this->execPassedQuery($query, $parameters);
		return $statement;
	}
}

//$Data =  new Database();

//$Data->insert('INSERT INTO demo_table (`name`) values (:name)',['name' => 'mnnish']); 

//$Data->select('SELECT * FROM demo_table WHERE id = :id',['id' => 2]); 

// $Data->update('UPDATE demo_table SET name = "sathe" WHERE id = :id', ['id' => '2']);

//$Data->delete('DELETE FROM demo_table WHERE id = :id', ['id' => '2']);
