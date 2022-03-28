<?php

namespace App\Entity;

use App\Repository\TypesAbsenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypesAbsenceRepository::class)]
class TypesAbsence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $libelleTypeabsence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTypeabsence(): ?string
    {
        return $this->libelleTypeabsence;
    }

    public function setLibelleTypeabsence(string $libelleTypeabsence): self
    {
        $this->libelleTypeabsence = $libelleTypeabsence;

        return $this;
    }
}
