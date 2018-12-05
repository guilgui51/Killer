<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameListRepository")
 */
class GameList
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Jeudesociete", inversedBy="gameLists")
     */
    private $games;

    public function __construct()
    {
        $this->games = new ArrayCollection();
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

    /**
     * @return Collection|Jeudesociete[]
     */
    public function getGames(): Collection
    {
        return $this->games;
    }

    /**
     * @return Collection|Jeudesociete[]
     */
    public function getGamesOrdered(): Collection
    {
        $sort = new Criteria(null, ['interest' => Criteria::ASC]);
        return $this->games->matching($sort);
        return $this->games;
    }

    public function addGame(Jeudesociete $game): self
    {
        if (!$this->games->contains($game)) {
            $this->games[] = $game;
        }

        return $this;
    }

    public function removeGame(Jeudesociete $game): self
    {
        if ($this->games->contains($game)) {
            $this->games->removeElement($game);
        }

        return $this;
    }
}
