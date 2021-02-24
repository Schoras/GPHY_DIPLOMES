<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission", indexes={@ORM\Index(name="FK_EFFECTUE", columns={"ID_CONTRAT"}), @ORM\Index(name="FK_DANS", columns={"ID_ENTREPRISE"}), @ORM\Index(name="FK_SAISIE3", columns={"ID_O"})})
 * @ORM\Entity
 */
class Mission
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_M", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idM;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_ENTREPRISE", type="integer", nullable=false)
     */
    private $idEntreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=false)
     */
    private $idContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_O", type="integer", nullable=false)
     */
    private $idO;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DEBUT", type="date", nullable=true)
     */
    private $debut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FIN", type="date", nullable=true)
     */
    private $fin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_MJ", type="date", nullable=true)
     */
    private $dateMj;


}
