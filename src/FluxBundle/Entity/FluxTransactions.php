<?php

namespace FluxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FluxTransactions
 *
 * @ORM\Table(name="flux_transactions")
 * @ORM\Entity(repositoryClass="FluxBundle\Repository\FluxTransactionsRepository")
 */
class FluxTransactions
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
     * @var float
     *
     * @ORM\Column(name="somme", type="float")
     */
    private $somme;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=2)
     */
    private $nature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    public function __construct($nature, $somme)
    {
        $this->nature = $nature;
        $this->somme = $somme;
        $this->date =  new \DateTime();
    }



    /**
     * Set somme
     *
     * @param float $somme
     *
     * @return FluxTransactions
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;
    
        return $this;
    }

    /**
     * Get somme
     *
     * @return float
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * Set nature
     *
     * @param float $nature
     *
     * @return FluxTransactions
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
    
        return $this;
    }

    /**
     * Get nature
     *
     * @return float
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return FluxTransactions
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

