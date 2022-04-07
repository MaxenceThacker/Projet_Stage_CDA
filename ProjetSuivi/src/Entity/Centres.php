<?php

namespace App\Entity;

use App\Repository\CentresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CentresRepository::class)]
class Centres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomCentre;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresseCentre;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $compltAdresseCentre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCentre(): ?string
    {
        return $this->nomCentre;
    }

    public function setNomCentre(string $nomCentre): self
    {
        $this->nomCentre = $nomCentre;

        return $this;
    }

    public function getAdresseCentre(): ?string
    {
        return $this->adresseCentre;
    }

    public function setAdresseCentre(string $adresseCentre): self
    {
        $this->adresseCentre = $adresseCentre;

        return $this;
    }

    public function getCompltAdresseCentre(): ?string
    {
        return $this->compltAdresseCentre;
    }

    public function setCompltAdresseCentre(?string $compltAdresseCentre): self
    {
        $this->compltAdresseCentre = $compltAdresseCentre;

        return $this;
    }
}
