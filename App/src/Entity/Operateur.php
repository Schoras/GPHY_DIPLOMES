<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operateur
 *
 * @ORM\Table(name="operateur")
 * @ORM\Entity
 */
class Operateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_O", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idO;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=20, nullable=true)
     */
    private $prenom;


}
