<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantRepository")
 */
class Participant
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
     * @ORM\Column(type="string", length=255)
     */
    private $emailAddress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uid;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAlive;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfKills;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Participant", inversedBy="killer", cascade={"persist", "remove"})
     */
    private $target;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Participant", mappedBy="target", cascade={"persist", "remove"})
     */
    private $killer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\KillerParty", inversedBy="participants")
     */
    private $party;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Mission", inversedBy="getPlayer")
     */
    private $mission;

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

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;

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

    public function getIsAlive(): ?bool
    {
        return $this->isAlive;
    }

    public function setIsAlive(bool $isAlive): self
    {
        $this->isAlive = $isAlive;

        return $this;
    }

    public function getNumberOfKills(): ?int
    {
        return $this->numberOfKills;
    }

    public function setNumberOfKills(int $numberOfKills): self
    {
        $this->numberOfKills = $numberOfKills;

        return $this;
    }

    public function getTarget(): ?self
    {
        return $this->target;
    }

    public function setTarget(?self $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getKiller(): ?self
    {
        return $this->killer;
    }

    public function setKiller(?self $killer): self
    {
        $this->killer = $killer;

        // set (or unset) the owning side of the relation if necessary
        $newTarget = $killer === null ? null : $this;
        if ($newTarget !== $killer->getTarget()) {
            $killer->setTarget($newTarget);
        }

        return $this;
    }

    public function getParty(): ?KillerParty
    {
        return $this->party;
    }

    public function setParty(?KillerParty $party): self
    {
        $this->party = $party;

        return $this;
    }

    public function getMission(): ?Mission
    {
        return $this->mission;
    }

    public function setMission(?Mission $mission): self
    {
        $this->mission = $mission;

        return $this;
    }
}
