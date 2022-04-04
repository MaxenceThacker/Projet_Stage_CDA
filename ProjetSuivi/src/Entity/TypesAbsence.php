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
    private $libelleTypeAbsence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTypeAbsence(): ?string
    {
        return $this->libelleTypeAbsence;
    }

    public function setLibelleTypeAbsence(string $libelleTypeAbsence): self
    {
        $this->libelleTypeAbsence = $libelleTypeAbsence;

        return $this;
    }
}
