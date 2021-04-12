<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteuractivite
 *
 * @ORM\Table(name="secteuractivite")
 * @ORM\Entity
 */
class Secteuractivite
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_SECTEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_SECTEUR", type="string", length=255, nullable=false)
     */
    private $nomSecteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_ETENDU", type="string", length=255, nullable=true)
     */
    private $nomEtendu;


}
