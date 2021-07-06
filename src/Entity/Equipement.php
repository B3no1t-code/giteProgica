<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipementRepository::class)
 */
class Equipement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Gite::class, mappedBy="equipements")
     */
    private $yes;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
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
     * @return Collection|Gite[]
     */
    public function getYes(): Collection
    {
        return $this->yes;
    }

    public function addYe(Gite $ye): self
    {
        if (!$this->yes->contains($ye)) {
            $this->yes[] = $ye;
            $ye->addEquipement($this);
        }

        return $this;
    }

    public function removeYe(Gite $ye): self
    {
        if ($this->yes->removeElement($ye)) {
            $ye->removeEquipement($this);
        }

        return $this;
    }
}
