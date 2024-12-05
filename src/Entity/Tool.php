<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ToolRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: ToolRepository::class)]
#[UniqueEntity('name')]
class Tool
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Votre outil doit faire au minimum {{ limit }} caractères.',
        maxMessage: 'Votre outil doit faire au maximum {{ limit }} caractères.',
    )]
    private ?string $name = null;

    #[ORM\Column(length: 250, nullable: true)]
    #[Assert\Length(
        min: 2,
        max: 250,
        minMessage: 'Votre description doit faire au minimum {{ limit }} caractères.',
        maxMessage: 'Votre description doit faire au maximum {{ limit }} caractères.',
    )]
    private ?string $description = null;

    #[ORM\Column(length: 250, nullable: true)]
    #[Assert\Length(
        min: 2,
        max: 250,
        minMessage: 'Votre reference doit faire au minimum {{ limit }} caractères.',
        maxMessage: 'Votre reference doit faire au maximum {{ limit }} caractères.',
    )]
    private ?string $reference = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToMany(targetEntity: Creation::class, mappedBy: 'Tool')]
    private Collection $creations;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function __construct() {
        $this->createdAt = new \DateTimeImmutable();
        $this->creations = new ArrayCollection();
    }

    /**
     * @return Collection<int, Creation>
     */
    public function getCreations(): Collection
    {
        return $this->creations;
    }

    public function addCreation(Creation $creation): static
    {
        if (!$this->creations->contains($creation)) {
            $this->creations->add($creation);
            $creation->addTool($this);
        }

        return $this;
    }

    public function removeCreation(Creation $creation): static
    {
        if ($this->creations->removeElement($creation)) {
            $creation->removeTool($this);
        }

        return $this;
    }

    public function __toString(): string {
        return $this->name;
    }
}
