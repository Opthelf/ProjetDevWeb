<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $users = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsers(): ?string
    {
        return $this->users;
    }

    public function setUsers(string $users): static
    {
        $this->users = $users;

        return $this;
    }
}
