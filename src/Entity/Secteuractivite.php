<?php

namespace App\Entity;

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

    public function getIdSecteur(): ?int
    {
        return $this->idSecteur;
    }

    public function getNomSecteur(): ?string
    {
        return $this->nomSecteur;
    }

    public function setNomSecteur(string $nomSecteur): self
    {
        $this->nomSecteur = $nomSecteur;

        return $this;
    }

    public function getNomEtendu(): ?string
    {
        return $this->nomEtendu;
    }

    public function setNomEtendu(?string $nomEtendu): self
    {
        $this->nomEtendu = $nomEtendu;

        return $this;
    }


}
