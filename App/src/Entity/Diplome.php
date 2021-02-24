<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table(name="diplome", indexes={@ORM\Index(name="FK_SAISIE1", columns={"ID_O"})})
 * @ORM\Entity
 */
class Diplome
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUM_ETUD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numEtud;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_O", type="integer", nullable=false)
     */
    private $idO;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=55, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=55, nullable=false)
     */
    private $prenom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PROMO", type="integer", nullable=true)
     */
    private $promo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_USAGE", type="string", length=55, nullable=true)
     */
    private $nomUsage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM_PV", type="string", length=55, nullable=true)
     */
    private $prenomPv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_MJ", type="date", nullable=true)
     */
    private $dateMj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMMENTAIRE", type="string", length=500, nullable=true)
     */
    private $commentaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NIVEAU_DIPLOME", type="integer", nullable=true)
     */
    private $niveauDiplome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONE", type="string", length=20, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RESEAU_SOCIAL", type="string", length=255, nullable=true)
     */
    private $reseauSocial;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_DECES", type="date", nullable=true)
     */
    private $dateDeces;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SITUATION_RS", type="string", length=50, nullable=true)
     */
    private $situationRs;


}
