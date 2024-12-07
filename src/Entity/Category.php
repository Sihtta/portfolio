<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[UniqueEntity('name')]
class Category
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
        minMessage: 'Votre catégorie doit faire au minimum {{ limit }} caractères.',
        maxMessage: 'Votre catégorie doit faire au maximum {{ limit }} caractères.',
    )]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Creation::class, mappedBy: 'category')]
    private Collection $creations;

    public function __construct()
    {
        $this->creations = new ArrayCollection();
    }

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
            $creation->addCategory($this);
        }

        return $this;
    }

    public function removeCreation(Creation $creation): static
    {
        if ($this->creations->removeElement($creation)) {
            $creation->removeCategory($this);
        }

        return $this;
    }
    public function __toString():string {
        return $this->name;
    }
}