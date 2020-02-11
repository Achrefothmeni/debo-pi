<?php

namespace FluxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="FluxBundle\Repository\FactureRepository")
 */
class Facture
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     */
    private $id;


    /**
     * @var float
     *
     * @ORM\Column(name="prixtotal", type="float")
     */
    private $prixtotal;

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set prixtotal
     *
     * @param float $prixtotal
     *
     * @return Facture
     */
    public function setPrixtotal($prixtotal)
    {
        $this->prixtotal = $prixtotal;
    
        return $this;
    }

    /**
     * Get prixtotal
     *
     * @return float
     */
    public function getPrixtotal()
    {
        return $this->prixtotal;
    }

}

