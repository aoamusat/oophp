<?php

	/**
	 * Database class
	 */
	class Database
	{

		public static function connect()
		{
			try {
				return (new PDO("mysql:host=localhost; dbname=ashjam", 'root', 'toor'));
			}
			catch (PDOException $ex)
			{
				throw new Exception("Error Connecting Database", 1);
				
			}
		}

		public static function select($table)
		{

			$handler = static::connect();

			$sql = "SELECT * FROM {$table}";

			$query = $handler->query($sql);

			$result = $query->fetchAll(PDO::FETCH_OBJ);

			return $result;
		}
	}