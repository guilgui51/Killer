<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KillerPartyRepository")
 */
class KillerParty
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startingDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uid;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Participant", mappedBy="party", cascade={"persist", "remove"})
     */
    private $participants;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isOver;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Participant", cascade={"persist", "remove"})
     */
    private $Winner;

    public function __construct()
    {
        $this->participants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartingDate(): ?\DateTimeInterface
    {
        return $this->startingDate;
    }

    public function setStartingDate(\DateTimeInterface $startingDate): self
    {
        $this->startingDate = $startingDate;

        return $this;
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

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @return Collection|Participant[]
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(Participant $participant): self
    {
        if (!$this->participants->contains($participant)) {
            $this->participants[] = $participant;
            $participant->setParty($this);
        }

        return $this;
    }

    public function removeParticipant(Participant $participant): self
    {
        if ($this->participants->contains($participant)) {
            $this->participants->removeElement($participant);
            // set the owning side to null (unless already changed)
            if ($participant->getParty() === $this) {
                $participant->setParty(null);
            }
        }

        return $this;
    }

    public function getIsOver(): ?bool
    {
        return $this->isOver;
    }

    public function setIsOver(?bool $isOver): self
    {
        $this->isOver = $isOver;

        return $this;
    }

    public function getWinner(): ?Participant
    {
        return $this->Winner;
    }

    public function setWinner(?Participant $Winner): self
    {
        $this->Winner = $Winner;

        return $this;
    }
}
