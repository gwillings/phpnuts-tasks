Getting Started with PDO

<?php

use PhpNuts\Database\Config;

ini_set('display_errors', 1);
define('BASE_PATH',  dirname(__DIR__));
require_once BASE_PATH . '/vendor/autoload.php';

$config = Config::loadFromIni(BASE_PATH . '/config/database.ini');

$pdo = new PDO($config->toDsn(), $config->getUsername(), $config->getPassword());

$statement = $pdo->prepare("SELECT * FROM user");
$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_ASSOC));