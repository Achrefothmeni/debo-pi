<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="CommandeBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="datetime")
     */
    private $dateCommande;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $summe;

    /**
     * @return mixed
     */
    public function getSumme()
    {
        return $this->summe;
    }

    /**
     * @param mixed $summe
     */
    public function setSumme($summe)
    {
        $this->summe = $summe;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255,nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255,nullable=true)
     */
    private $status = "En attente";

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }




    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }



    /**
     * @ORM\Column(name="date_max", type="datetime", nullable=true)
     */private $dateMax;

    /**
     * @return mixed
     */
    public function getDateMax()
    {
        return $this->dateMax;
    }

    /**
     * @param mixed $dateMax
     */
    public function setDateMax($dateMax)
    {
        $this->dateMax = $dateMax;
    }
    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AuthBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $idUser;

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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }





    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Commande
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }





}

