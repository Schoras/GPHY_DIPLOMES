<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emploi
 *
 * @ORM\Table(name="emploi", indexes={@ORM\Index(name="FK_SAISIE2", columns={"ID_O"}), @ORM\Index(name="FK_CONTRACT", columns={"ID_ENTREPRISE"}), @ORM\Index(name="FK_SIGNE", columns={"NUM_ETUD"})})
 * @ORM\Entity
 */
class Emploi
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_ENTREPRISE", type="integer", nullable=false)
     */
    private $idEntreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="NUM_ETUD", type="integer", nullable=false)
     */
    private $numEtud;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_O", type="integer", nullable=false)
     */
    private $idO;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DEBUT_C", type="date", nullable=true)
     */
    private $debutC;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FIN_C", type="date", nullable=true)
     */
    private $finC;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPE_CONTRAT", type="string", length=20, nullable=true)
     */
    private $typeContrat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_MJ", type="date", nullable=true)
     */
    private $dateMj;


}
