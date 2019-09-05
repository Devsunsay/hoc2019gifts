<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GiftRepository")
 */
class Gift
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
    private $gift_title;

    /**
     * @ORM\Column(type="text")
     */
    private $gift_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGiftTitle(): ?string
    {
        return $this->gift_title;
    }

    public function setGiftTitle(string $gift_title): self
    {
        $this->gift_title = $gift_title;

        return $this;
    }

    public function getGiftDescription(): ?string
    {
        return $this->gift_description;
    }

    public function setGiftDescription(string $gift_description): self
    {
        $this->gift_description = $gift_description;

        return $this;
    }
}
