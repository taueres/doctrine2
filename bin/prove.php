<?php

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Tests\Sergio\Person;

/** @var EntityManagerInterface $entityManager */
$entityManager = require 'boot.php';

/** @var Person $p */
$p = $entityManager->find(Person::class, 1);
var_dump(get_class($p->getHouse()));

var_dump($p->getHouse());

var_dump($p->getHouse()->getFloor());
