<?php

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Tests\Sergio\Flat;
use Doctrine\Tests\Sergio\House;
use Doctrine\Tests\Sergio\Person;

require 'boot.php';

main();

function main() {
    $eugenioLesta = new Person();
    $eugenioLesta->setFirstName('eugenio');
    $eugenioLesta->setLastName('lesta');

    $sergioSantoro = new Person();
    $sergioSantoro->setFirstName('sergio');
    $sergioSantoro->setLastName('santoro');

    $valerioGesualdi = new Person();
    $valerioGesualdi->setFirstName('valerio');
    $valerioGesualdi->setLastName('gesualdi');

    $house = new House();
    $house->setStreet('termoli');

    $flat = new Flat();
    $flat->setStreet('milano');
    $flat->setFloor(3);

    $eugenioLesta->setHouse($house);
    $sergioSantoro->setHouse($flat);
    $valerioGesualdi->setHouse($house);

    $em = getEm();
    $em->persist($eugenioLesta);
    $em->persist($sergioSantoro);
    $em->persist($valerioGesualdi);
    $em->persist($house);
    $em->persist($flat);
    $em->flush();
}
