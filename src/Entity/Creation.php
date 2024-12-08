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
use Vich\UploaderBundle\Mapping\Annotation as Vich;


#[ORM\Entity(repositoryClass: CreationRepository::class)]
/*#[Vich\Uploadable]*/
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

    /*#[Vich\UploadableField(mapping: 'product_image',fileNameProperty:'imageName')]
    private ?File $imageFile = null;

    #[ORM\Column(type:'string')]
    private ?string $imageName = null;*/

    #[ORM\Column(length: 250, nullable: true)]
    #[Assert\Length(
        min: 2,
        max: 250,
        minMessage: 'Votre description doit faire au minimum {{ limit }} caractères.',
        maxMessage: 'Votre description doit faire au maximum {{ limit }} caractères.',
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

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

    public function __construct()
    {
        $this->Tool = new ArrayCollection();
        $this->category = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->createdAt = new DateTime();
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

    /* @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
    public function setImageFile(?File $imageFile = null): void {
        $this->imageFile = $imageFile;
        if (null !== $imageFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
    public function getImageFile(): ?File {
        return $this->imageFile;
    }
    public function setImageName(?string $imageName): void {
        $this->imageName = $imageName;
    }
    public function getImageName(): ?string
    {
        return $this->imageName;
    }*/

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
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

    public function __toString():string {
        return $this->name;
    }
}
