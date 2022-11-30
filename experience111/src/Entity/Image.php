<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ImageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
#[ApiResource]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\ManyToOne]
    private ?Desc $desc_id = null;

    #[ORM\Column(length: 255)]
    private ?string $taille = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $blobs = null;

    #[ORM\ManyToOne(inversedBy: 'img_id')]
    private ?Livre $id_livre = null;

    #[ORM\ManyToOne(inversedBy: 'img_id')]
    private ?InfoAutrice $infoaut_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescId(): ?Desc
    {
        return $this->desc_id;
    }

    public function setDescId(?Desc $desc_id): self
    {
        $this->desc_id = $desc_id;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getBlobs()
    {
        return $this->blobs;
    }

    public function setBlobs($blobs): self
    {
        $this->blobs = $blobs;

        return $this;
    }

    public function getIdLivre(): ?Livre
    {
        return $this->id_livre;
    }

    public function setIdLivre(?Livre $id_livre): self
    {
        $this->id_livre = $id_livre;

        return $this;
    }

    public function getInfoautId(): ?InfoAutrice
    {
        return $this->infoaut_id;
    }

    public function setInfoautId(?InfoAutrice $infoaut_id): self
    {
        $this->infoaut_id = $infoaut_id;

        return $this;
    }
}
