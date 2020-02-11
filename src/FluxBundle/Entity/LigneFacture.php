<?php

namespace FluxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneFacture
 *
 * @ORM\Table(name="ligne_facture")
 * @ORM\Entity(repositoryClass="FluxBundle\Repository\LigneFactureRepository")
 */

class LigneFacture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumn(name="idfacture", referencedColumnName="id")
     */

        private $idfacture;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_unitaire", type="float")
     */
    private $prixUnitaire;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     *
     * @return LigneFacture
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;
    
        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return LigneFacture
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @return mixed
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * @param mixed $idfacture
     */
    public function setIdfacture($idfacture)
    {
        $this->idfacture = $idfacture;
    }

}

