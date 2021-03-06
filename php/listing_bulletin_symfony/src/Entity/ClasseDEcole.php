<?php

namespace App\Entity;

use App\Repository\ClasseDEcoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ClasseDEcoleRepository::class)
 * @UniqueEntity("numeroClasse")
 */
class ClasseDEcole
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $moyenneClasse;

    /**
     * @ORM\OneToMany(targetEntity=Eleve::class, mappedBy="classeDEcole")
     */
    private $eleves;

    /**
     * @ORM\Column(type="integer", unique=true)
     */
    private $numeroClasse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbEleves;

    public function __construct()
    {
        $this->eleves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getMoyenneClasse(): ?int
    {
        return $this->moyenneClasse;
    }

    public function setMoyenneClasse(int $moyenneClasse): self
    {
        $this->moyenneClasse = $moyenneClasse;

        return $this;
    }

    /**
     * @return Collection|Eleve[]
     */
    public function getEleves(): Collection
    {
        return $this->eleves;
    }

    public function addEleve(Eleve $eleve): self
    {
        if (!$this->eleves->contains($eleve)) {
            $this->eleves[] = $eleve;
            $eleve->setClasseDEcole($this);
        }

        return $this;
    }

    public function removeEleve(Eleve $eleve): self
    {
        if ($this->eleves->removeElement($eleve)) {
            // set the owning side to null (unless already changed)
            if ($eleve->getClasseDEcole() === $this) {
                $eleve->setClasseDEcole(null);
            }
        }

        return $this;
    }

    public function getNumeroClasse(): ?int
    {
        return $this->numeroClasse;
    }

    public function setNumeroClasse(int $numeroClasse): self
    {
        $this->numeroClasse = $numeroClasse;

        return $this;
    }

    public function getNbEleves(): ?int
    {
        return $this->nbEleves;
    }

    public function setNbEleves(int $nbEleves): self
    {
        $this->nbEleves = $nbEleves;

        return $this;
    }
}
