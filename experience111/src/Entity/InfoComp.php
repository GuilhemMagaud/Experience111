<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\InfoCompRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoCompRepository::class)]
#[ApiResource]
class InfoComp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Desc $desc_id = null;

    #[ORM\ManyToOne]
    private ?Image $img_id = null;

    #[ORM\ManyToOne(inversedBy: 'infocomp_id')]
    private ?Livre $livre_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getImgId(): ?Image
    {
        return $this->img_id;
    }

    public function setImgId(?Image $img_id): self
    {
        $this->img_id = $img_id;

        return $this;
    }

    public function getLivreId(): ?Livre
    {
        return $this->livre_id;
    }

    public function setLivreId(?Livre $livre_id): self
    {
        $this->livre_id = $livre_id;

        return $this;
    }
}
