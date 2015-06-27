<?php
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Tests\Sergio\Flat;
use Doctrine\Tests\Sergio\Person;

/** @var EntityManagerInterface $entityManager */
$entityManager = require 'boot.php';

$h = new Flat();
$h->setStreet('indirizzo');
$h->setFloor(4);

$p = new Person();
$p->setFirstName('eugenio');
$p->setLastName('lesta');
$p->setHouse($h);

$entityManager->persist($p);
$entityManager->persist($h);
$entityManager->flush();
