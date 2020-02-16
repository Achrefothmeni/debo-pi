<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="libelle", type="string", length=255, unique=true)
     */
    private $libelle;


    /**
     * Get id
     *
     * @return int
     */

    /**
     * Set idCategory
     *
     * @param string $idCategory
     *
     * @return Category
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * Get idCategory
     *
     * @return string
     */

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Category
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Article")
     * @ORM\JoinColumn(name="libelle",referencedColumnName="libelle")
     */
    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}

