<?php

namespace App\Entity;

use App\Repository\FormationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationsRepository::class)]
class Formations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 150)]
    private $sigleFormation;

    #[ORM\Column(type: 'string', length: 150)]
    private $intituleFormation;

    #[ORM\Column(type: 'string', length: 50)]
    private $codeTitreFormation;

    #[ORM\Column(type: 'date')]
    private $millesimeFormation;

    #[ORM\Column(type: 'date')]
    private $dateParutionFormation;

    #[ORM\Column(type: 'string', length: 10)]
    private $nsfFormation;

    #[ORM\Column(type: 'string', length: 5)]
    private $romeFormation;

    #[ORM\Column(type: 'date')]
    private $dateFinValdteAggrmentFormation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSigleFormation(): ?string
    {
        return $this->sigleFormation;
    }

    public function setSigleFormation(string $sigleFormation): self
    {
        $this->sigleFormation = $sigleFormation;

        return $this;
    }

    public function getIntituleFormation(): ?string
    {
        return $this->intituleFormation;
    }

    public function setIntituleFormation(string $intituleFormation): self
    {
        $this->intituleFormation = $intituleFormation;

        return $this;
    }

    public function getCodeTitreFormation(): ?string
    {
        return $this->codeTitreFormation;
    }

    public function setCodeTitreFormation(string $codeTitreFormation): self
    {
        $this->codeTitreFormation = $codeTitreFormation;

        return $this;
    }

    public function getMillesimeFormation(): ?\DateTimeInterface
    {
        return $this->millesimeFormation;
    }

    public function setMillesimeFormation(\DateTimeInterface $millesimeFormation): self
    {
        $this->millesimeFormation = $millesimeFormation;

        return $this;
    }

    public function getDateParutionFormation(): ?\DateTimeInterface
    {
        return $this->dateParutionFormation;
    }

    public function setDateParutionFormation(\DateTimeInterface $dateParutionFormation): self
    {
        $this->dateParutionFormation = $dateParutionFormation;

        return $this;
    }

    public function getNsfFormation(): ?string
    {
        return $this->nsfFormation;
    }

    public function setNsfFormation(string $nsfFormation): self
    {
        $this->nsfFormation = $nsfFormation;

        return $this;
    }

    public function getRomeFormation(): ?string
    {
        return $this->romeFormation;
    }

    public function setRomeFormation(string $romeFormation): self
    {
        $this->romeFormation = $romeFormation;

        return $this;
    }

    public function getDateFinValdteAggrmentFormation(): ?\DateTimeInterface
    {
        return $this->dateFinValdteAggrmentFormation;
    }

    public function setDateFinValdteAggrmentFormation(\DateTimeInterface $dateFinValdteAggrmentFormation): self
    {
        $this->dateFinValdteAggrmentFormation = $dateFinValdteAggrmentFormation;

        return $this;
    }
}
