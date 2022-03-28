<?php

namespace App\Entity;

use App\Repository\LieuxEvenementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuxEvenementRepository::class)]
class LieuxEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $libelleLieuevenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleLieuevenement(): ?string
    {
        return $this->libelleLieuevenement;
    }

    public function setLibelleLieuevenement(string $libelleLieuevenement): self
    {
        $this->libelleLieuevenement = $libelleLieuevenement;

        return $this;
    }
}
