<?php

namespace App\Entity;

use App\Repository\DocteurRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=DocteurRepository::class)
 */
class Docteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rpps;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motDePasse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRpps(): ?string
    {
        return $this->rpps;
    }

    public function setRpps(string $rpps): self
    {
        $this->rpps = $rpps;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }
}
