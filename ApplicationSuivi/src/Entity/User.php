<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
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

    #[ORM\OneToOne(targetEntity: Alternants::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $IdAlternant;

    #[ORM\OneToOne(targetEntity: Tuteurs::class, cascade: ['persist', 'remove'])]
    private $IdTuteur;

    #[ORM\OneToOne(targetEntity: Formateurs::class, cascade: ['persist', 'remove'])]
    private $IdFormateur;

    #[ORM\OneToOne(targetEntity: ResponsablesLegaux::class, cascade: ['persist', 'remove'])]
    private $IdResponsableLegal;

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

    public function getIdAlternant(): ?Alternants
    {
        return $this->IdAlternant;
    }

    public function setIdAlternant(Alternants $IdAlternant): self
    {
        $this->IdAlternant = $IdAlternant;

        return $this;
    }

    public function getIdTuteur(): ?Tuteurs
    {
        return $this->IdTuteur;
    }

    public function setIdTuteur(?Tuteurs $IdTuteur): self
    {
        $this->IdTuteur = $IdTuteur;

        return $this;
    }

    public function getIdFormateur(): ?Formateurs
    {
        return $this->IdFormateur;
    }

    public function setIdFormateur(?Formateurs $IdFormateur): self
    {
        $this->IdFormateur = $IdFormateur;

        return $this;
    }

    public function getIdResponsableLegal(): ?ResponsablesLegaux
    {
        return $this->IdResponsableLegal;
    }

    public function setIdResponsableLegal(?ResponsablesLegaux $IdResponsableLegal): self
    {
        $this->IdResponsableLegal = $IdResponsableLegal;

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
