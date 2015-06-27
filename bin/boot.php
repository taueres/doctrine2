<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require __DIR__ . '/../vendor/autoload.php';

return boot();

function boot () {
    $dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => 'root',
        'dbname'   => 'example',
        'host'   => 'db',
    );

    $paths = array(realpath(__DIR__ . '/../tests/Doctrine/Tests/Sergio'));

    $config = Setup::createAnnotationMetadataConfiguration($paths, true);
    return EntityManager::create($dbParams, $config);
}
