<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region", indexes={@ORM\Index(name="FK_APPARTIENT", columns={"ID_PAYS"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_REGION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_PAYS", type="integer", nullable=true)
     */
    private $idPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_REGION", type="string", length=20, nullable=true)
     */
    private $nomRegion;

    public function getIdRegion(): ?int
    {
        return $this->idRegion;
    }

    public function getIdPays(): ?int
    {
        return $this->idPays;
    }

    public function setIdPays(?int $idPays): self
    {
        $this->idPays = $idPays;

        return $this;
    }

    public function getNomRegion(): ?string
    {
        return $this->nomRegion;
    }

    public function setNomRegion(?string $nomRegion): self
    {
        $this->nomRegion = $nomRegion;

        return $this;
    }


}
