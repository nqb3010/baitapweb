<?php
$config = array(
	'dbHost' => '127.0.0.1',
	'dbUser' => 'root',
	'dbPass' => '',
	'dbName' => 'web',
	'dbOptions' => array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
    )
);
try{
	$dsn = "mysql:host={$config['dbHost']};port=3306;dbname={$config['dbName']}";
	$dbh = new PDO($dsn, $config['dbUser'], $config['dbPass'], $config['dbOptions']);
}catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
	die();
}
?>