<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['emailUser'], message: 'There is already an account with this emailUser')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $emailUser;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: Formateurs::class, cascade: ['persist', 'remove'])]
    private $formateurs;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: Tuteurs::class, cascade: ['persist', 'remove'])]
    private $tuteurs;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: ResponsablesLegaux::class, cascade: ['persist', 'remove'])]
    private $responsablesLegaux;

    #[ORM\OneToOne(mappedBy: 'idUser', targetEntity: Alternants::class, cascade: ['persist', 'remove'])]
    private $alternants;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\Column(type: 'string', length: 150)]
    private $nomUser;

    #[ORM\Column(type: 'string', length: 150)]
    private $prenomUser;

    #[ORM\Column(type: 'date')]
    private $ddnUser;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresseUser;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $compltAdresseUser;

    #[ORM\Column(type: 'integer')]
    private $numTelUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(string $emailUser): self
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->emailUser;
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

    public function getFormateurs(): ?Formateurs
    {
        return $this->formateurs;
    }

    public function setFormateurs(?Formateurs $formateurs): self
    {
        // unset the owning side of the relation if necessary
        if ($formateurs === null && $this->formateurs !== null) {
            $this->formateurs->setIdUser(null);
        }

        // set the owning side of the relation if necessary
        if ($formateurs !== null && $formateurs->getIdUser() !== $this) {
            $formateurs->setIdUser($this);
        }

        $this->formateurs = $formateurs;

        return $this;
    }

    public function getTuteurs(): ?Tuteurs
    {
        return $this->tuteurs;
    }

    public function setTuteurs(?Tuteurs $tuteurs): self
    {
        // unset the owning side of the relation if necessary
        if ($tuteurs === null && $this->tuteurs !== null) {
            $this->tuteurs->setIdUser(null);
        }

        // set the owning side of the relation if necessary
        if ($tuteurs !== null && $tuteurs->getIdUser() !== $this) {
            $tuteurs->setIdUser($this);
        }

        $this->tuteurs = $tuteurs;

        return $this;
    }

    public function getResponsablesLegaux(): ?ResponsablesLegaux
    {
        return $this->responsablesLegaux;
    }

    public function setResponsablesLegaux(?ResponsablesLegaux $responsablesLegaux): self
    {
        // unset the owning side of the relation if necessary
        if ($responsablesLegaux === null && $this->responsablesLegaux !== null) {
            $this->responsablesLegaux->setIdUser(null);
        }

        // set the owning side of the relation if necessary
        if ($responsablesLegaux !== null && $responsablesLegaux->getIdUser() !== $this) {
            $responsablesLegaux->setIdUser($this);
        }

        $this->responsablesLegaux = $responsablesLegaux;

        return $this;
    }

    public function getAlternants(): ?Alternants
    {
        return $this->alternants;
    }

    public function setAlternants(?Alternants $alternants): self
    {
        // unset the owning side of the relation if necessary
        if ($alternants === null && $this->alternants !== null) {
            $this->alternants->setIdUser(null);
        }

        // set the owning side of the relation if necessary
        if ($alternants !== null && $alternants->getIdUser() !== $this) {
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

    public function getCompltAdresseUser(): ?string
    {
        return $this->compltAdresseUser;
    }

    public function setCompltAdresseUser(?string $compltAdresseUser): self
    {
        $this->compltAdresseUser = $compltAdresseUser;

        return $this;
    }

    public function getNumTelUser(): ?int
    {
        return $this->numTelUser;
    }

    public function setNumTelUser(int $numTelUser): self
    {
        $this->numTelUser = $numTelUser;

        return $this;
    }
}
