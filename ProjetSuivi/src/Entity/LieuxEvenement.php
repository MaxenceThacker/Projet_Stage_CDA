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
    private $libelleLieuEvenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleLieuEvenement(): ?string
    {
        return $this->libelleLieuEvenement;
    }

    public function setLibelleLieuEvenement(string $libelleLieuEvenement): self
    {
        $this->libelleLieuEvenement = $libelleLieuEvenement;

        return $this;
    }
}
