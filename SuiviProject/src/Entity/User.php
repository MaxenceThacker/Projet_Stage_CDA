<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: Tuteurs::class, cascade: ['persist', 'remove'])]
    private $tuteurs;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: Formateurs::class, cascade: ['persist', 'remove'])]
    private $formateurs;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: ResponsablesLegaux::class, cascade: ['persist', 'remove'])]
    private $responsablesLegaux;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: Alternants::class, cascade: ['persist', 'remove'])]
    private $alternants;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getTuteurs(): ?Tuteurs
    {
        return $this->tuteurs;
    }

    public function setTuteurs(Tuteurs $tuteurs): self
    {
        // set the owning side of the relation if necessary
        if ($tuteurs->getIdUser() !== $this) {
            $tuteurs->setIdUser($this);
        }

        $this->tuteurs = $tuteurs;

        return $this;
    }

    public function getFormateurs(): ?Formateurs
    {
        return $this->formateurs;
    }

    public function setFormateurs(Formateurs $formateurs): self
    {
        // set the owning side of the relation if necessary
        if ($formateurs->getIdUser() !== $this) {
            $formateurs->setIdUser($this);
        }

        $this->formateurs = $formateurs;

        return $this;
    }

    public function getResponsablesLegaux(): ?ResponsablesLegaux
    {
        return $this->responsablesLegaux;
    }

    public function setResponsablesLegaux(ResponsablesLegaux $responsablesLegaux): self
    {
        // set the owning side of the relation if necessary
        if ($responsablesLegaux->getIdUser() !== $this) {
            $responsablesLegaux->setIdUser($this);
        }

        $this->responsablesLegaux = $responsablesLegaux;

        return $this;
    }

    public function getAlternants(): ?Alternants
    {
        return $this->alternants;
    }

    public function setAlternants(Alternants $alternants): self
    {
        // set the owning side of the relation if necessary
        if ($alternants->getIdUser() !== $this) {
            $alternants->setIdUser($this);
        }

        $this->alternants = $alternants;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
}
