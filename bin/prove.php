<?php

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Tests\Sergio\Person;
use Doctrine\Tests\Sergio\House;

require 'boot.php';

main();

function main()
{
    $em = getEm();

    $houses = $em->getRepository(House::class)->findAll();
    var_dump($houses[0]->getPersons()->count());
}
