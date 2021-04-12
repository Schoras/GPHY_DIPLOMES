<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise", indexes={@ORM\Index(name="FK_LOCALISE", columns={"ID_VILLE"})})
 * @ORM\Entity
 */
class Entreprise
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ENTREPRISE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_VILLE", type="integer", nullable=false)
     */
    private $idVille;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLOYEUR", type="string", length=255, nullable=false)
     */
    private $employeur;


}
