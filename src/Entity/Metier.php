<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table(name="metier", indexes={@ORM\Index(name="FK_INCLUE", columns={"ID_SECTEUR"})})
 * @ORM\Entity
 */
class Metier
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_METIER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMetier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_SECTEUR", type="integer", nullable=true)
     */
    private $idSecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_METIER", type="string", length=50, nullable=false)
     */
    private $nomMetier;

    public function getIdMetier(): ?int
    {
        return $this->idMetier;
    }

    public function getIdSecteur(): ?int
    {
        return $this->idSecteur;
    }

    public function setIdSecteur(?int $idSecteur): self
    {
        $this->idSecteur = $idSecteur;

        return $this;
    }

    public function getNomMetier(): ?string
    {
        return $this->nomMetier;
    }

    public function setNomMetier(string $nomMetier): self
    {
        $this->nomMetier = $nomMetier;

        return $this;
    }


}
