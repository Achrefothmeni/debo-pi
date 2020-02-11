<?php

namespace LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonDeLivraison
 *
 * @ORM\Table(name="bon_de_livraison")
 * @ORM\Entity(repositoryClass="LivraisonBundle\Repository\BonDeLivraisonRepository")
 */
class BonDeLivraison
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
     * @ORM\OneToOne(targetEntity="Livraison")
     * @ORM\JoinColumn(name="livraison_id", referencedColumnName="id")
     */
    private $livraison;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

