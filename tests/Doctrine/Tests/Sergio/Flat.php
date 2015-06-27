<?php

namespace Doctrine\Tests\Sergio;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

/**
 * Class Flat
 *
 * @Entity()
 * @Table(name="flat")
 */
class Flat extends House
{
    /**
     * @var int
     *
     * @Column(type="integer")
     */
    private $floor;

    /**
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param int $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }
}
