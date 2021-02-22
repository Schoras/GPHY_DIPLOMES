<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="FK_ETRE", columns={"ID_REGION"})})
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_VILLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVille;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_REGION", type="integer", nullable=true)
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_VILLE", type="string", length=20, nullable=false)
     */
    private $nomVille;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODE_POSTAL", type="integer", nullable=true)
     */
    private $codePostal;

    public function getIdVille(): ?int
    {
        return $this->idVille;
    }

    public function getIdRegion(): ?int
    {
        return $this->idRegion;
    }

    public function setIdRegion(?int $idRegion): self
    {
        $this->idRegion = $idRegion;

        return $this;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(string $nomVille): self
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }


}
