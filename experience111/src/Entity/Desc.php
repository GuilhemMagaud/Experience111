<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DescRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DescRepository::class)]
#[ORM\Table(name: '`desc`')]
#[ApiResource]
class Desc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    #[ORM\ManyToOne(inversedBy: 'desc_id')]
    private ?InfoAutrice $infoAut_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getInfoAutId(): ?InfoAutrice
    {
        return $this->infoAut_id;
    }

    public function setInfoAutId(?InfoAutrice $infoAut_id): self
    {
        $this->infoAut_id = $infoAut_id;

        return $this;
    }
}
