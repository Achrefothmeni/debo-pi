<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="ArticleBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_category;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, unique=true)
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity="ResourcesBundle\Entity\Fleet",mappedBy="category")
     * @ORM\JoinColumn(name="fleet_id", referencedColumnName="matriculation")
     */
    public $fleet;
    /**
     * @ORM\OneToMany(targetEntity="ResourcesBundle\Entity\Magazin",mappedBy="category")
     * @ORM\JoinColumn(name="magazin_id", referencedColumnName="id_mag")
     */
    public $magazin;

    /**
     * Get id
     *
     * @return int

     */


    /**
     * @ORM\OneToMany(targetEntity="ArticleBundle\Entity\Article", mappedBy="label")
     */


    /**
     * @return int
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param int $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

}

