<?php

namespace App\Entity;

use App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\LikeRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: LikeRepository::class)]
#[ORM\Table(name: '`like`')]
#[UniqueEntity(
    fields: ['user', 'creation'],
    message: 'Cet utilisateur à déjà liké cette recette.',
    errorPath: 'user',
)]
class Like
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'likes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'likes')]
    private ?Creation $creation = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function __construct() {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getCreation(): ?Creation
    {
        return $this->creation;
    }

    public function setCreation(?Creation $creation): static
    {
        $this->creation = $creation;

        return $this;
    }
}
