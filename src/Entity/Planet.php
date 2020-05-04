<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planet
 *
 * @ORM\Table(name="planet")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PlanetRepository")
 */
class Planet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="diameter", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $diameter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="density", type="bigint", nullable=true)
     */
    private $density;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gravitation", type="string", length=100, nullable=true)
     */
    private $gravitation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="string", length=100, nullable=true)
     */
    private $weight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distanceFromSun", type="string", length=100, nullable=true)
     */
    private $distancefromsun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numberOfMoons", type="bigint", nullable=true)
     */
    private $numberofmoons;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDiameter(): ?string
    {
        return $this->diameter;
    }

    public function setDiameter(string $diameter): self
    {
        $this->diameter = $diameter;

        return $this;
    }

    public function getDensity(): ?string
    {
        return $this->density;
    }

    public function setDensity(?string $density): self
    {
        $this->density = $density;

        return $this;
    }

    public function getGravitation(): ?string
    {
        return $this->gravitation;
    }

    public function setGravitation(?string $gravitation): self
    {
        $this->gravitation = $gravitation;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getDistancefromsun(): ?string
    {
        return $this->distancefromsun;
    }

    public function setDistancefromsun(?string $distancefromsun): self
    {
        $this->distancefromsun = $distancefromsun;

        return $this;
    }

    public function getNumberofmoons(): ?string
    {
        return $this->numberofmoons;
    }

    public function setNumberofmoons(?string $numberofmoons): self
    {
        $this->numberofmoons = $numberofmoons;

        return $this;
    }


}
