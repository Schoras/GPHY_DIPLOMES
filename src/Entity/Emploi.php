<?php

namespace App\Entity;

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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Diplome")
     */
    private $diplome;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Entreprise")
     */
    private $entreprise;

    public function getIdContrat(): ?int
    {
        return $this->idContrat;
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

    public function getNumEtud(): ?int
    {
        return $this->numEtud;
    }

    public function setNumEtud(int $numEtud): self
    {
        $this->numEtud = $numEtud;

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

    public function getDebutC(): ?\DateTimeInterface
    {
        return $this->debutC;
    }

    public function setDebutC(?\DateTimeInterface $debutC): self
    {
        $this->debutC = $debutC;

        return $this;
    }

    public function getFinC(): ?\DateTimeInterface
    {
        return $this->finC;
    }

    public function setFinC(?\DateTimeInterface $finC): self
    {
        $this->finC = $finC;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(?string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

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
