<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="FK_ETRE", columns={"NOM_REGION", "NOM_PAYS"})})
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
     * @var string
     *
     * @ORM\Column(name="NOM_VILLE", type="string", length=50, nullable=false)
     */
    private $nomVille;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_REGION", type="string", length=50, nullable=false)
     */
    private $nomRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_PAYS", type="string", length=50, nullable=false)
     */
    private $nomPays;


}
