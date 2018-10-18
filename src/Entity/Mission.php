<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MissionRepository")
 */
class Mission
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
    private $missionTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $missionText;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Participant", mappedBy="mission")
     */
    private $getPlayer;

    public function __construct()
    {
        $this->getPlayer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMissionTitle(): ?string
    {
        return $this->missionTitle;
    }

    public function setMissionTitle(string $missionTitle): self
    {
        $this->missionTitle = $missionTitle;

        return $this;
    }

    public function getMissionText(): ?string
    {
        return $this->missionText;
    }

    public function setMissionText(string $missionText): self
    {
        $this->missionText = $missionText;

        return $this;
    }

    /**
     * @return Collection|Participant[]
     */
    public function getGetPlayer(): Collection
    {
        return $this->getPlayer;
    }

    public function addGetPlayer(Participant $getPlayer): self
    {
        if (!$this->getPlayer->contains($getPlayer)) {
            $this->getPlayer[] = $getPlayer;
            $getPlayer->setMission($this);
        }

        return $this;
    }

    public function removeGetPlayer(Participant $getPlayer): self
    {
        if ($this->getPlayer->contains($getPlayer)) {
            $this->getPlayer->removeElement($getPlayer);
            // set the owning side to null (unless already changed)
            if ($getPlayer->getMission() === $this) {
                $getPlayer->setMission(null);
            }
        }

        return $this;
    }
}
