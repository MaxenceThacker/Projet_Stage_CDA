<?php

namespace App\Entity;

use App\Repository\TuteursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TuteursRepository::class)
 */
class Tuteurs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="Tuteurs", cascade={"persist", "remove"})
     */
    private $tuteurUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTuteurUser(): ?User
    {
        return $this->tuteurUser;
    }

    public function setTuteurUser(?User $tuteurUser): self
    {
        // unset the owning side of the relation if necessary
        if ($tuteurUser === null && $this->tuteurUser !== null) {
            $this->tuteurUser->setTuteurs(null);
        }

        // set the owning side of the relation if necessary
        if ($tuteurUser !== null && $tuteurUser->getTuteurs() !== $this) {
            $tuteurUser->setTuteurs($this);
        }

        $this->tuteurUser = $tuteurUser;

        return $this;
    }
}
