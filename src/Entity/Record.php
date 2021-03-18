<?php

namespace App\Entity;

use App\Repository\RecordRepository;
use App\Util\TimestampableEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecordRepository::class)
 */
class Record
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $latitude;

    /**
     * @ORM\Column(type="string")
     */
    private $longitude;

    /**
     * @ORM\Column(type="string")
     */
    private $humidity;

    /**
     * @var City
     * @ORM\ManyToOne(targetEntity="App\Entity\City")
     */
    private $city;

    public function getId(): ?int
    {
        return $this->id;
    }
}
