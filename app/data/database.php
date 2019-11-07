<?php

/**
 * 
 */
class Database
{
	private static $dbHost = '127.0.0.1';
	private static $dbName = 'new_panel';
	private static $dbUser = 'root';
	private static $dbPass = '';

	protected $result;

	// public function __construct($queryName, $params) {
	// 	$this->syntax($queryName, $params);
	// }

	protected static function connect() {
		$pdo = new PDO("mysql:host=".self::$dbHost."; dbname=".self::$dbName.";charset=utf8", self::$dbUser, self::$dbPass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}

	protected function syntax($query, $params = []) {
		$st = self::connect()->prepare($query);
		$st->execute($params);
		if (explode(' ', $query)[0] == 'SELECT') {
			$this->result = $st->fetchAll(PDO::FETCH_ASSOC);
			return $this->result;
		}
	}
}