<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
#[ApiResource]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Desc $desc_id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\OneToMany(mappedBy: 'id_livre', targetEntity: Image::class)]
    private Collection $img_id;

    #[ORM\OneToMany(mappedBy: 'livre_id', targetEntity: InfoComp::class)]
    private Collection $infocomp_id;

    public function __construct()
    {
        $this->img_id = new ArrayCollection();
        $this->infocomp_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImgId(): Collection
    {
        return $this->img_id;
    }

    public function addImgId(Image $imgId): self
    {
        if (!$this->img_id->contains($imgId)) {
            $this->img_id->add($imgId);
            $imgId->setIdLivre($this);
        }

        return $this;
    }

    public function removeImgId(Image $imgId): self
    {
        if ($this->img_id->removeElement($imgId)) {
            // set the owning side to null (unless already changed)
            if ($imgId->getIdLivre() === $this) {
                $imgId->setIdLivre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, InfoComp>
     */
    public function getInfocompId(): Collection
    {
        return $this->infocomp_id;
    }

    public function addInfocompId(InfoComp $infocompId): self
    {
        if (!$this->infocomp_id->contains($infocompId)) {
            $this->infocomp_id->add($infocompId);
            $infocompId->setLivreId($this);
        }

        return $this;
    }

    public function removeInfocompId(InfoComp $infocompId): self
    {
        if ($this->infocomp_id->removeElement($infocompId)) {
            // set the owning side to null (unless already changed)
            if ($infocompId->getLivreId() === $this) {
                $infocompId->setLivreId(null);
            }
        }

        return $this;
    }
}
