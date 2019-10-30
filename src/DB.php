<?php 

	class DB
	{

		const database = Database;

		// public function __construct(Database $database)
		// {
		// 	$this->database = $database;
		// }

		public static function select($table)
		{

			$handler = self::database;

			$sql = "SELECT * FROM {$table}";

			$query = $handler->query($sql);

			$result = $query->fetchAll(PDO::OBJ);

			return $result;
		}
	}