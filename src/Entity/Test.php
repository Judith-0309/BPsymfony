<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $val;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVal(): ?string
    {
        return $this->val;
    }

    public function setVal(string $val): self
    {
        $this->val = $val;

        return $this;
    }
}
