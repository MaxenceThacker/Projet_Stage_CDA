<?php

namespace App\Entity;

use App\Repository\AlternantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AlternantRepository::class)
 */
class Alternant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="Alternants", cascade={"persist", "remove"})
     */
    private $AlternantUser;

    public function getsId(): ?int
    {
        return $this->id;
    }

    public function getAlternantUser(): ?User
    {
        return $this->AlternantUser;
    }

    public function setAlternantUser(?User $AlternantUser): self
    {
        // unset the owning side of the relation if necessary
        if ($AlternantUser === null && $this->AlternantUser !== null) {
            $this->AlternantUser->setAlternants(null);
        }

        // set the owning side of the relation if necessary
        if ($AlternantUser !== null && $AlternantUser->getAlternants() !== $this) {
            $AlternantUser->setAlternants($this);
        }

        $this->AlternantUser = $AlternantUser;

        return $this;
    }
}
