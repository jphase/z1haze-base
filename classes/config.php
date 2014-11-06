<?php
/**
 * Name:	Database class
 * Author:	z1haze
 * Version:	1.0
 */
namespace manager;

class Config {

	// Database variables
	public $db_user	= 'username';
	public $db_pass	= 'password';
	public $db_host	= 'localhost';
	public $db_name	= 'mydatabase';

	// Default timezone
	private $time_zone	= 'America/New_York';

	// Error reporting
	private $error_display	= true;
	private $error_level	= 'E_ALL';

}