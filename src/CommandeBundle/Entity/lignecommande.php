<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * lignecommande
 *
 * @ORM\Table(name="lignecommande")
 * @ORM\Entity(repositoryClass="CommandeBundle\Repository\lignecommandeRepository")
 */
class lignecommande
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
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixTotal;

    /**
     * @return mixed
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * @param mixed $prixTotal
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;
    }




    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Article")
     * @ORM\JoinColumn(name="id_produit",referencedColumnName="id_article")
     */
    private $idProduit;


    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Commande")
     * @ORM\JoinColumn(name="id_commande",referencedColumnName="id")
     */
    private $idCommande;

    /**
     * @return int
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }


    /**
     * @param int $idCommande
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    }




















    /**
     * @var int
     *
     * @ORM\Column(name="quntite", type="integer",nullable=true)
     */
    private $quntite;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return lignecommande
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }



    /**
     * Set quntite
     *
     * @param integer $quntite
     *
     * @return lignecommande
     */
    public function setQuntite($quntite)
    {
        $this->quntite = $quntite;

        return $this;
    }

    /**
     * Get quntite
     *
     * @return int
     */
    public function getQuntite()
    {
        return $this->quntite;
    }

}