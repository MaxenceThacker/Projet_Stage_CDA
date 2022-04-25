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

    #[ORM\Column(type: 'string', length: 255)]
    private $justification;

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

    public function getJustification(): ?string
    {
        return $this->justification;
    }

    public function setJustification(string $justification): self
    {
        $this->justification = $justification;

        return $this;
    }
}
