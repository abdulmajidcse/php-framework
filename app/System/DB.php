<?php
namespace App\System;

use mysqli;
use App\Config\Database;

class DB
{
	use Database;

	private $db;

	public function __construct()
	{
		$this->db = new mysqli($this->database['host_name'], $this->database['username'], $this->database['password'], $this->database['database_name']);

		if ($this->db->connect_error) {
			return $this->db->connect_error;
		}
	}

	public function query($sql)
	{
		return $this->db->query($sql);
	}

	public function get($table, $column = ['*'], $limit = null)
	{
		$column = implode(', ', $column);
		if ($limit == null) {
			$sql = "SELECT $column FROM $table";
		} else {
			$sql = "SELECT $column FROM $table LIMIT $limit";
		}

		return $this->query($sql);
	}
}