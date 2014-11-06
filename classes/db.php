<?php
/**
 * Name:	Database class
 * Author:	z1haze
 * Version:	1.0
 */
namespace manager;
use PDO;
use manager\Config as config;

class Database extends PDO {

	// Initialize
	private $db;
	private $host;
	private $user;
	private $pass;
	private $conn;

	// This fires when you do:  $blah = new Database;
	public function __construct() {

		// Initialize
		$this->user 	= config->user;
		$this->pass 	= config->pass;
		$this->host 	= config->host;
		$this->dbname 	= config->dbname;

		echo '' . $this->user;
		die();

		// Connection
		$this->conn = new PDO( 'mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass );

	}

}