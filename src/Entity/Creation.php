<?php

namespace App\Entity;

use App\Entity\Tool;
use App\Entity\Comment;
use App\Entity\Category;
use Doctrine\ORM\Mapping as ORM;

use App\Repository\CreationRepository;
use DateTime;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: CreationRepository::class)]
class Creation
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
        minMessage: 'Votre nom de creation doit faire au minimum {{ limit }} caractères.',
        maxMessage: 'Votre nom de creation doit faire au maximum {{ limit }} caractères.',
    )]
    private ?string $name = null;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Assert\NotNull]
    private \DateTimeImmutable $updatedAt;

    #[ORM\Column(length: 250, nullable: true)]
    #[Assert\Length(
        min: 2,
        max: 250,
        minMessage: 'Votre description doit faire au minimum {{ limit }} caractères.',
        maxMessage: 'Votre description doit faire au maximum {{ limit }} caractères.',
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?array $image = [];

    #[ORM\ManyToMany(targetEntity: Tool::class, inversedBy: 'creations')]
    private Collection $Tool;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'creations')]
    private Collection $category;

    #[ORM\Column]
    private ?\DateTime $createdAt = null;

    #[ORM\OneToMany(targetEntity: Like::class, mappedBy: 'creation')]
    private Collection $likes;

    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'creation')]
    private Collection $comments;

    #[ORM\Column]
    private ?bool $isPublic = null;

    public function __construct()
    {
        $this->Tool = new ArrayCollection();
        $this->category = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->createdAt = new DateTime();
        $this->updatedAt = new \DateTimeImmutable();
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

    #[ORM\PreUpdate] // Méthode appelée avant chaque mise à jour
    public function updateTimestamp(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
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

    public function getImage(): ?array
    {
        return $this->image;
    }

    public function setImage(?array $image): static
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Collection<int, Tool>
     */
    public function getTool(): Collection
    {
        return $this->Tool;
    }

    public function addTool(Tool $tool): static
    {
        if (!$this->Tool->contains($tool)) {
            $this->Tool->add($tool);
        }

        return $this;
    }

    public function removeTool(Tool $tool): static
    {
        $this->Tool->removeElement($tool);

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->category->contains($category)) {
            $this->category->add($category);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        $this->category->removeElement($category);

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, Like>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function getLikesCount(): int
    {
        return $this->likes->count();
    }

    public function addLike(Like $like): static
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
            $like->setCreation($this);
        }

        return $this;
    }

    public function removeLike(Like $like): static
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getCreation() === $this) {
                $like->setCreation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    /**
     * Nb de commentaires pour la création
     * @return int
     */
    public function getCommentsCount(): int
    {
        return $this->comments->count();
    }

    public function addComment(Comment $comment): static
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setCreation($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): static
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getCreation() === $this) {
                $comment->setCreation(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function getIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(bool $isPublic): static
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Fonction qui permet de savoir si un utilisateur a "like" une création
     *
     * @param User $user
     * @return boolean
     */
    public function isLikedByUser(User $user): bool
    {
        foreach ($this->likes as $like) {
            if ($like->getUser() === $user) {
                return true;
            }
        }
        return false;
    }
}
