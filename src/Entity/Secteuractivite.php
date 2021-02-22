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
     * @ORM\Column(name="NOM_SECTEUR", type="string", length=50, nullable=false)
     */
    private $nomSecteur;

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


}
