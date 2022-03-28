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
    private $libelleTypeevenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTypeevenement(): ?string
    {
        return $this->libelleTypeevenement;
    }

    public function setLibelleTypeevenement(string $libelleTypeevenement): self
    {
        $this->libelleTypeevenement = $libelleTypeevenement;

        return $this;
    }
}
