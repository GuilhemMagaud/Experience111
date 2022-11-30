<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\InfoAutriceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoAutriceRepository::class)]
#[ApiResource]
class InfoAutrice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'infoaut_id', targetEntity: Image::class)]
    private Collection $img_id;

    #[ORM\OneToMany(mappedBy: 'infoAut_id', targetEntity: Desc::class)]
    private Collection $desc_id;

    public function __construct()
    {
        $this->img_id = new ArrayCollection();
        $this->desc_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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
            $imgId->setInfoautId($this);
        }

        return $this;
    }

    public function removeImgId(Image $imgId): self
    {
        if ($this->img_id->removeElement($imgId)) {
            // set the owning side to null (unless already changed)
            if ($imgId->getInfoautId() === $this) {
                $imgId->setInfoautId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Desc>
     */
    public function getDescId(): Collection
    {
        return $this->desc_id;
    }

    public function addDescId(Desc $descId): self
    {
        if (!$this->desc_id->contains($descId)) {
            $this->desc_id->add($descId);
            $descId->setInfoAutId($this);
        }

        return $this;
    }

    public function removeDescId(Desc $descId): self
    {
        if ($this->desc_id->removeElement($descId)) {
            // set the owning side to null (unless already changed)
            if ($descId->getInfoAutId() === $this) {
                $descId->setInfoAutId(null);
            }
        }

        return $this;
    }
}
