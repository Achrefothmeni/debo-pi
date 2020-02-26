<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prop_App_offre
 *
 * @ORM\Table(name="prop__app_offre")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\Prop_App_offreRepository")
 */
class Prop_App_offre
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
     * @var int
     *
     * @ORM\Column(name="prix_prop", type="integer")
     */
    private $prixProp;

    /**
     * @ORM\ManyToOne(targetEntity="Appel_d_offre")
     * @ORM\JoinColumn(name="id_app_offre",referencedColumnName="id")
     */
    private $offre;
    /**
     * @param mixed
     */

    /**
     * @return mixed
     */
    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * @return mixed offre
     */
    /**
     * @param mixed $offre
     */
    public function setOffre($offre)
    {
        $this->offre = $offre;
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
     * Set prixProp
     *
     * @param integer $prixProp
     *
     * @return Prop_App_offre
     */
    public function setPrixProp($prixProp)
    {
        $this->prixProp = $prixProp;

        return $this;
    }

    /**
     * Get prixProp
     *
     * @return int
     */
    public function getPrixProp()
    {
        return $this->prixProp;
    }
}

