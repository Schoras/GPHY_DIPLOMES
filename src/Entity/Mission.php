<?php

namespace App\Entity;

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

    public function getIdM(): ?int
    {
        return $this->idM;
    }

    public function getIdEntreprise(): ?int
    {
        return $this->idEntreprise;
    }

    public function setIdEntreprise(int $idEntreprise): self
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    public function getIdContrat(): ?int
    {
        return $this->idContrat;
    }

    public function setIdContrat(int $idContrat): self
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    public function getIdO(): ?int
    {
        return $this->idO;
    }

    public function setIdO(int $idO): self
    {
        $this->idO = $idO;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(?\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(?\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

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


}
