<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table(name="metier")
 * @ORM\Entity
 */
class Metier
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_METIER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMetier;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_METIER", type="string", length=70, nullable=false)
     */
    private $nomMetier;


}
