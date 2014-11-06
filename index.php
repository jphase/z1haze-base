<?php
namespace manager;

	require_once './classes/config.php';
	require_once './classes/db.php';

$config = new Config;
$db = new Database( $config->db_user, $config->db_pass, $config->db_host, $config->db_name );

echo '<pre>';
print_r($db);
echo '</pre>';