<?php

namespace App\Entity;

use App\Repository\DocumentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentsRepository::class)]
class Documents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 150)]
    private $libelleDocument;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleDocument(): ?string
    {
        return $this->libelleDocument;
    }

    public function setLibelleDocument(string $libelleDocument): self
    {
        $this->libelleDocument = $libelleDocument;

        return $this;
    }
}
