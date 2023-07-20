<?php

namespace App\Entity;

use App\Repository\AserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AserRepository::class)]
class Aser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $m = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getM(): ?string
    {
        return $this->m;
    }

    public function setM(string $m): static
    {
        $this->m = $m;

        return $this;
    }
}
