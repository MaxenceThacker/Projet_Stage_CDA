<?php

namespace App\Entity;

use App\Repository\AbsencesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AbsencesRepository::class)]
class Absences
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $dateAbsence;

    #[ORM\Column(type: 'integer')]
    private $nbrHeureAbsence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateAbsence(): ?\DateTimeInterface
    {
        return $this->dateAbsence;
    }

    public function setDateAbsence(\DateTimeInterface $dateAbsence): self
    {
        $this->dateAbsence = $dateAbsence;

        return $this;
    }

    public function getNbrHeureAbsence(): ?int
    {
        return $this->nbrHeureAbsence;
    }

    public function setNbrHeureAbsence(int $nbrHeureAbsence): self
    {
        $this->nbrHeureAbsence = $nbrHeureAbsence;

        return $this;
    }
}
