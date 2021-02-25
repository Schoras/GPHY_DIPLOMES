<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region", indexes={@ORM\Index(name="FK_APPARTIENT", columns={"NOM_PAYS"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOM_REGION", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nomRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_PAYS", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nomPays;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ville", mappedBy="nomRegion")
     */
    private $villes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pays")
     */
    private $pays;

    public function getNomRegion(): ?string
    {
        return $this->nomRegion;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }


}
