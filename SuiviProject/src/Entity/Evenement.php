<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'time')]
    private $heureEvenement;

    #[ORM\Column(type: 'date')]
    private $dateEvenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeureEvenement(): ?\DateTimeInterface
    {
        return $this->heureEvenement;
    }

    public function setHeureEvenement(\DateTimeInterface $heureEvenement): self
    {
        $this->heureEvenement = $heureEvenement;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(\DateTimeInterface $dateEvenement): self
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }
}
