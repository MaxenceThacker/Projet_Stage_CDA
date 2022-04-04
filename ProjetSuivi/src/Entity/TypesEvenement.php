<?php

namespace App\Entity;

use App\Repository\TypesEvenementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypesEvenementRepository::class)]
class TypesEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $libelleTypeEvenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTypeEvenement(): ?string
    {
        return $this->libelleTypeEvenement;
    }

    public function setLibelleTypeEvenement(string $libelleTypeEvenement): self
    {
        $this->libelleTypeEvenement = $libelleTypeEvenement;

        return $this;
    }
}
