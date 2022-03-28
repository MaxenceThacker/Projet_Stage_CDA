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

    #[ORM\Column(type: 'string', length: 150)]
    private $NomUser;

    #[ORM\Column(type: 'string', length: 150)]
    private $PrenomUser;

    #[ORM\Column(type: 'date')]
    private $DdnUser;

    #[ORM\Column(type: 'string', length: 255)]
    private $AdresseUser;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ComplementAdresseUser;

    #[ORM\Column(type: 'integer')]
    private $numeroTelUser;

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
        return $this->idAlternant;
    }

    public function setIdAlternant(Alternants $idAlternant): self
    {
        $this->idAlternant = $idAlternant;

        return $this;
    }

    public function getIdTuteur(): ?Tuteurs
    {
        return $this->idTuteur;
    }

    public function setIdTuteur(?Tuteurs $idTuteur): self
    {
        $this->idTuteur = $idTuteur;

        return $this;
    }

    public function getIdFormateur(): ?Formateurs
    {
        return $this->idFormateur;
    }

    public function setIdFormateur(?Formateurs $idFormateur): self
    {
        $this->idFormateur = $idFormateur;

        return $this;
    }

    public function getIdResponsableLegal(): ?ResponsablesLegaux
    {
        return $this->idResponsableLegal;
    }

    public function setIdResponsableLegal(?ResponsablesLegaux $idResponsableLegal): self
    {
        $this->idResponsableLegal = $idResponsableLegal;

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

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getDdnUser(): ?\DateTimeInterface
    {
        return $this->ddnUser;
    }

    public function setDdnUser(\DateTimeInterface $ddnUser): self
    {
        $this->ddnUser = $ddnUser;

        return $this;
    }

    public function getAdresseUser(): ?string
    {
        return $this->adresseUser;
    }

    public function setAdresseUser(string $adresseUser): self
    {
        $this->adresseUser = $adresseUser;

        return $this;
    }

    public function getComplementAdresseUser(): ?string
    {
        return $this->complementAdresseUser;
    }

    public function setComplementAdresseUser(?string $complementAdresseUser): self
    {
        $this->complementAdresseUser = $complementAdresseUser;

        return $this;
    }

    public function getNumeroTelUser(): ?int
    {
        return $this->numeroTelUser;
    }

    public function setNumeroTelUser(int $numeroTelUser): self
    {
        $this->numeroTelUser = $numeroTelUser;

        return $this;
    }
}
