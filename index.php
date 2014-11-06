<?php

	require_once './classes/config.php';
	require_once './classes/db.php';

$db = new Database('test');
echo '<pre>';
print_r($db);
echo '</pre>';