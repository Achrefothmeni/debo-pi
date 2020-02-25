<?php

namespace LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity(repositoryClass="LivraisonBundle\Repository\LivraisonRepository")
 */
class Livraison
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
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="datetime")
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arivee", type="datetime", nullable=true)
     */
    private $dateArivee;

    /**
     * @ORM\OneToOne(targetEntity="BonDeLivraison")
     * @ORM\JoinColumn(name="bon_de_livraison_id", referencedColumnName="id")
     */
    private $bonDeLivraison;

    /**
     * @ORM\ManyToOne(targetEntity="AuthBundle\Entity\User")
     * @ORM\JoinColumn(name="livreur_id", referencedColumnName="id")
     */
    private $livreur;



    /**
     * @return mixed
     */
    public function getBonDeLivraison()
    {
        return $this->bonDeLivraison;
    }

    /**
     * @param mixed $bonDeLivraison
     */
    public function setBonDeLivraison($bonDeLivraison)
    {
        $this->bonDeLivraison = $bonDeLivraison;
    }

    /**
     * @return mixed
     */
    public function getLivreur()
    {
        return $this->livreur;
    }

    /**
     * @param mixed $livreur
     */
    public function setLivreur($livreur)
    {
        $this->livreur = $livreur;
    }






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
     * Set text
     *
     * @param string $text
     *
     * @return Livraison
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Livraison
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Livraison
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArivee
     *
     * @param \DateTime $dateArivee
     *
     * @return Livraison
     */
    public function setDateArivee($dateArivee)
    {
        $this->dateArivee = $dateArivee;

        return $this;
    }

    /**
     * Get dateArivee
     *
     * @return \DateTime
     */
    public function getDateArivee()
    {
        return $this->dateArivee;
    }
}

