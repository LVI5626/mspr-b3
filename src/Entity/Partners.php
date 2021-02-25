<?php

namespace App\Entity;

use App\Repository\PartnersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartnersRepository::class)
 */
class Partners
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $partners_name;

    /**
     * @ORM\Column(type="text")
     */
    private $partners_picture;

    /**
     * @ORM\Column(type="text")
     */
    private $partners_theme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartnersName(): ?string
    {
        return $this->partners_name;
    }

    public function setPartnersName(string $partners_name): self
    {
        $this->partners_name = $partners_name;

        return $this;
    }

    public function getPartnersPicture(): ?string
    {
        return $this->partners_picture;
    }

    public function setPartnersPicture(string $partners_picture): self
    {
        $this->partners_picture = $partners_picture;

        return $this;
    }

    public function getPartnersTheme(): ?string
    {
        return $this->partners_theme;
    }

    public function setPartnersTheme(string $partners_theme): self
    {
        $this->partners_theme = $partners_theme;

        return $this;
    }
}
