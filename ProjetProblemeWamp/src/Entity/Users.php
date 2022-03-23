<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=320)
     */
    private $emailUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passwordUser;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $lastnameUser;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nameUser;

    /**
     * @ORM\Column(type="date")
     */
    private $DoBUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adressUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $additionnalAdressUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $phoneNumberUser;

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

    public function getPasswordUser(): ?string
    {
        return $this->passwordUser;
    }

    public function setPasswordUser(string $passwordUser): self
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    public function getLastnameUser(): ?string
    {
        return $this->lastnameUser;
    }

    public function setLastnameUser(string $lastnameUser): self
    {
        $this->lastnameUser = $lastnameUser;

        return $this;
    }

    public function getNameUser(): ?string
    {
        return $this->nameUser;
    }

    public function setNameUser(string $nameUser): self
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    public function getDoBUser(): ?\DateTimeInterface
    {
        return $this->DoBUser;
    }

    public function setDoBUser(\DateTimeInterface $DoBUser): self
    {
        $this->DoBUser = $DoBUser;

        return $this;
    }

    public function getAdressUser(): ?string
    {
        return $this->adressUser;
    }

    public function setAdressUser(string $adressUser): self
    {
        $this->adressUser = $adressUser;

        return $this;
    }

    public function getAdditionnalAdressUser(): ?string
    {
        return $this->additionnalAdressUser;
    }

    public function setAdditionnalAdressUser(string $additionnalAdressUser): self
    {
        $this->additionnalAdressUser = $additionnalAdressUser;

        return $this;
    }

    public function getPhoneNumberUser(): ?int
    {
        return $this->phoneNumberUser;
    }

    public function setPhoneNumberUser(int $phoneNumberUser): self
    {
        $this->phoneNumberUser = $phoneNumberUser;

        return $this;
    }
}
