<?php

namespace App\Entity;

use App\Repository\InfoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoRepository::class)]
class Info
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $poids = null;

    #[ORM\Column]
    private ?float $taille = null;

    #[ORM\Column]
    private ?float $objectif_poids = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column]
    private ?float $pas_act = null;

    #[ORM\Column]
    private ?float $pas_obj = null;

    #[ORM\Column]
    private ?float $cal_obj = null;

    #[ORM\Column]
    private ?float $cal_act = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getObjectifPoids(): ?float
    {
        return $this->objectif_poids;
    }

    public function setObjectifPoids(float $objectif_poids): static
    {
        $this->objectif_poids = $objectif_poids;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getPasAct(): ?float
    {
        return $this->pas_act;
    }

    public function setPasAct(float $pas_act): static
    {
        $this->pas_act = $pas_act;

        return $this;
    }

    public function getPasObj(): ?float
    {
        return $this->pas_obj;
    }

    public function setPasObj(float $pas_obj): static
    {
        $this->pas_obj = $pas_obj;

        return $this;
    }

    public function getCalObj(): ?float
    {
        return $this->cal_obj;
    }

    public function setCalObj(float $cal_obj): static
    {
        $this->cal_obj = $cal_obj;

        return $this;
    }

    public function getCalAct(): ?float
    {
        return $this->cal_act;
    }

    public function setCalAct(float $cal_act): static
    {
        $this->cal_act = $cal_act;

        return $this;
    }
}
