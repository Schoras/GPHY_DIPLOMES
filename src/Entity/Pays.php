<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOM_PAYS", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomPays;

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Region")
     */
    private $regions;

}
