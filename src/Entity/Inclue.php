<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inclue
 *
 * @ORM\Table(name="inclue", indexes={@ORM\Index(name="FK_INCLUE2", columns={"ID_M"})})
 * @ORM\Entity
 */
class Inclue
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_SECTEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSecteur;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_M", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idM;


}
