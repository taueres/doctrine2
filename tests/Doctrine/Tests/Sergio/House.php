<?php

namespace Doctrine\Tests\Sergio;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * Class House
 *
 * @Entity()
 * @Table(name="house")
 * @InheritanceType(value="JOINED")
 * @DiscriminatorMap(value={
 *     "house": "Doctrine\Tests\Sergio\House",
 *     "flat": "Doctrine\Tests\Sergio\Flat",
 * })
 * @DiscriminatorColumn(name="kind", type="string")
 */
class House
{
    /**
     * @var string
     *
     * @Id()
     * @GeneratedValue()
     * @Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    private $street;

    /**
     * @var Person[]
     *
     * @OneToMany(targetEntity="Doctrine\Tests\Sergio\Person", mappedBy="house")
     */
    private $persons;

    public function __construct()
    {
        $this->persons = new ArrayCollection();
    }

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
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return ArrayCollection|Person[]
     */
    public function getPersons()
    {
        return $this->persons;
    }
}
