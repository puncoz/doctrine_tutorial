<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("entities");
$isDevMode = false;

// the connection configuration
$dbParams = array(
				'driver'	=> 'pdo_mysql',
				'user'		=> 'root',
				'password'	=> '',
				'dbname'	=> 'prac_doctrine_tuts',
				'host'		=> 'localhost',
				'port'		=> ''
			);
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

?>