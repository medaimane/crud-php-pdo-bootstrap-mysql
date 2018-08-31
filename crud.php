<?php
/*
  Author : Mohamed Aimane Skhairi
  Email : skhairimedaimane@gmail.com
  Repo : https://github.com/medaimane/crud-php-pdo-bootstrap-mysql
*/

/*
	Table tbl_articles : 

	@var id  primary key
	@var title varchar
	@var content text

*/

	

class ArticlesCrud{

	private $connection;

	private $host = 'localhost';
	private $db = 'cake';
	private $user = 'root';
	private $pass = '';

	public function __construct(){
		try
		{
			$this->connection = new PDO('mysql:host={$host};dbname={$db}',$user,$pass);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function getConnection(){
		return $this->connection;
	}

	public function add(){
		$this->connection->prepare();
	}

	public function view($id = null){

	}

	public function edit($id = null){

	}

	public function delete($id = null){

	}


}





?>