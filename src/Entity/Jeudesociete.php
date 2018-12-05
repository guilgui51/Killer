<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JeudesocieteRepository")
 */
class Jeudesociete
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
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $minPlayer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $maxPlayer;

    /**
     * @ORM\Column(type="string", length=800, nullable=true)
     */
    private $shopLink;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $owned;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $interest;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $available;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\GameList", mappedBy="games")
     */
    private $gameLists;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\File(mimeTypes={ "image/png" , "image/jpeg" })
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $description;

    public function __construct()
    {
        $this->gameLists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getMinPlayer(): ?int
    {
        return $this->minPlayer;
    }

    public function setMinPlayer(int $minPlayer): self
    {
        $this->minPlayer = $minPlayer;

        return $this;
    }

    public function getMaxPlayer(): ?int
    {
        return $this->maxPlayer;
    }

    public function setMaxPlayer(int $maxPlayer): self
    {
        $this->maxPlayer = $maxPlayer;

        return $this;
    }

    public function getShopLink(): ?string
    {
        return $this->shopLink;
    }

    public function setShopLink(string $shopLink): self
    {
        $this->shopLink = $shopLink;

        return $this;
    }

    public function getOwned(): ?bool
    {
        return $this->owned;
    }

    public function setOwned(bool $owned): self
    {
        $this->owned = $owned;

        return $this;
    }

    public function getInterest(): ?int
    {
        return $this->interest;
    }

    public function setInterest(int $interest): self
    {
        $this->interest = $interest;

        return $this;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(?bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    /**
     * @return Collection|GameList[]
     */
    public function getGameLists(): Collection
    {
        return $this->gameLists;
    }

    public function addGameList(GameList $gameList): self
    {
        if (!$this->gameLists->contains($gameList)) {
            $this->gameLists[] = $gameList;
            $gameList->addGame($this);
        }

        return $this;
    }

    public function removeGameList(GameList $gameList): self
    {
        if ($this->gameLists->contains($gameList)) {
            $this->gameLists->removeElement($gameList);
            $gameList->removeGame($this);
        }

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
