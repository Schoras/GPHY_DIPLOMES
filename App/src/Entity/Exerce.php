<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exerce
 *
 * @ORM\Table(name="exerce", indexes={@ORM\Index(name="FK_EXERCE2", columns={"ID_METIER"})})
 * @ORM\Entity
 */
class Exerce
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_M", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idM;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_METIER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMetier;


}
