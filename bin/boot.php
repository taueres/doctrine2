<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require __DIR__ . '/../vendor/autoload.php';

/**
 * @return EntityManager
 * @throws \Doctrine\ORM\ORMException
 */
function getEM () {
    static $em = null;

    if (null === $em) {
        $dbParams = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => 'root',
            'dbname'   => 'example',
            'host'   => 'db',
        );

        $paths = array(realpath(__DIR__ . '/../tests/Doctrine/Tests/Sergio'));

        $config = Setup::createAnnotationMetadataConfiguration($paths, true);
        $em = EntityManager::create($dbParams, $config);
    }

    return $em;
}
