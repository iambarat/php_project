<?php

class query
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function select($table)
	{
		$statement = $this->pdo->prepare("Select * from {$table}");

		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS );

	}
	public function insert($table, $para)
	{
		$sql = sprintf('
			insert into %s (%s) values (%s)',
			$table, 
			implode(',', array_keys($para)), 
			':'. implode(', :', array_keys($para)));
		try
		{

		$statement = $this->pdo->prepare($sql);
		$statement->execute($para);
		} catch(Exception $e)
		{
			die("Something went wrong");
		}
	}
	// public function delete($id) {

 //        $sql = 'DELETE FROM user
 //                WHERE name = :id';

 //        $q = $this->pdo->prepare($sql);

 //        return $q->execute([':id' => $id]);
 //    }


}