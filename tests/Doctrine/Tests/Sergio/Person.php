<?php

namespace Doctrine\Tests\Sergio;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity()
 * @Table(name="person")
 */
class Person
{
    /**
     * @var int
     *
     * @Id()
     * @GeneratedValue()
     * @Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(type="string", name="first_name")
     */
    private $firstName;

    /**
     * @var string
     *
     * @Column(type="string", name="last_name")
     */
    private $lastName;

    /**
     * @var House
     *
     * @ManyToOne(targetEntity="Doctrine\Tests\Sergio\House", fetch="USE_PROXY")
     * @JoinColumn(name="house_id", referencedColumnName="id")
     */
    private $house;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return House
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param House $house
     */
    public function setHouse($house)
    {
        $this->house = $house;
    }
}
