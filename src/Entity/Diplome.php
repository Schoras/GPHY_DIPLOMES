<?php

namespace App\Entity;

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
     * @var int|null
     *
     * @ORM\Column(name="ID_O", type="integer", nullable=true)
     */
    private $idO;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="PROMO", type="integer", nullable=false)
     */
    private $promo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_USAGE", type="string", length=20, nullable=true)
     */
    private $nomUsage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM_PV", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="COMMENTAIRE", type="string", length=100, nullable=true)
     */
    private $commentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="NIVEAU_DIPLOME", type="integer", nullable=false)
     */
    private $niveauDiplome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TELEPHONE", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RESEAU_SOCIAL", type="string", length=50, nullable=true)
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

    public function getNumEtud(): ?int
    {
        return $this->numEtud;
    }

    public function getIdO(): ?int
    {
        return $this->idO;
    }

    public function setIdO(?int $idO): self
    {
        $this->idO = $idO;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPromo(): ?int
    {
        return $this->promo;
    }

    public function setPromo(int $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getNomUsage(): ?string
    {
        return $this->nomUsage;
    }

    public function setNomUsage(?string $nomUsage): self
    {
        $this->nomUsage = $nomUsage;

        return $this;
    }

    public function getPrenomPv(): ?string
    {
        return $this->prenomPv;
    }

    public function setPrenomPv(?string $prenomPv): self
    {
        $this->prenomPv = $prenomPv;

        return $this;
    }

    public function getDateMj(): ?\DateTimeInterface
    {
        return $this->dateMj;
    }

    public function setDateMj(?\DateTimeInterface $dateMj): self
    {
        $this->dateMj = $dateMj;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getNiveauDiplome(): ?int
    {
        return $this->niveauDiplome;
    }

    public function setNiveauDiplome(int $niveauDiplome): self
    {
        $this->niveauDiplome = $niveauDiplome;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getReseauSocial(): ?string
    {
        return $this->reseauSocial;
    }

    public function setReseauSocial(?string $reseauSocial): self
    {
        $this->reseauSocial = $reseauSocial;

        return $this;
    }

    public function getDateDeces(): ?\DateTimeInterface
    {
        return $this->dateDeces;
    }

    public function setDateDeces(?\DateTimeInterface $dateDeces): self
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    public function getSituationRs(): ?string
    {
        return $this->situationRs;
    }

    public function setSituationRs(?string $situationRs): self
    {
        $this->situationRs = $situationRs;

        return $this;
    }


}
