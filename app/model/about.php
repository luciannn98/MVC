<?php

/**
 * 
 */
class About extends Database {
	//protected static $data_file;
	protected $inventory = [];

	// public function __construct() {
	// 	self::$data_file = DATA.'cars.txt';
	// }

	private function load($params = []) {
		if ($params == []) {
			$this->inventory = $this->syntax("SELECT * FROM `admins`");
		} else {
			$this->inventory = $this->syntax("SELECT * FROM `admins` WHERE `id` = ?", $params);
		}
	}

	public function getUsers($params = []) {
		//var_dump($params);
		$this->load($params);
		return $this->inventory;
	}
}