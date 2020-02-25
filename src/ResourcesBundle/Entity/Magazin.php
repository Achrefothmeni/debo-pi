<?php

namespace ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Magazin
 *
 * @ORM\Table(name="magazin")
 * @ORM\Entity(repositoryClass="ResourcesBundle\Repository\MagazinRepository")
 */
class Magazin
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_mag", type="string", length=255)
     * @ORM\Id
     * @Assert\NotBlank(message="ne doit pas etre vide")
     * @Assert\Regex(
     *     pattern="/^M(1|2|3|4|5|6|7|8|9)(1|2|3|4|5|6|7|8|9)(1|2|3|4|5|6|7|8|9)$/",
     *     match=true,
     *     message="number"
     * )
     */
    private $id_mag;

    /**
     * @var int
     * @Assert\NotBlank(message="ne doit pas etre vide")
     * @Assert\Regex(
     *     pattern="/^(1|2|3|4|5|6|7|8|9)$/",
     *     match=true,
     *     message="number"
     * )
     *

     * @ORM\Column(name="capacity", type="integer")
     */
    private $capacity;

    /**
<<<<<<< HEAD
=======
     * @var int
     * @Assert\NotBlank(message="ne doit pas etre vide")
     * @Assert\Regex(
     *     pattern="/^(1|2|3|4|5|6|7|8|9)$/",
     *     match=true,
     *     message="number"
     * )
     *

     * @ORM\Column(name="capacityRest", type="integer", options={"unsigned":true, "default":0})
     */
    private $capacityRest;

    /**
>>>>>>> master
     * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Category",inversedBy="fleet")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id_category")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="AuthBundle\Entity\User")
     * @ORM\JoinColumn(name="magazinier_id", referencedColumnName="id")
     */
    private $magazinier;

    /**
     * @var string
     * @Assert\NotBlank(message="ne doit pas etre vide")
     * @Assert\Regex(
     *     pattern="/^(A|Z|E|R|T|Y|U|I|O|P|M|L|K|J|H|G|F|D|S|Q|W|X|C|V|B|N)+$/",
     *     match=true,
     *     message="char"
     * )
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @ORM\OnetoMany(targetEntity="ArticleBundle\Entity\Article",mappedBy="magazin")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id_article")
     */
    private $article;


    /**
     * Get id_mag
     *
     * @return string
     */
    public function getIdMag()
    {
        return $this->id_mag;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Magazin
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    
        return $this;
    }

    /**
     * Set capacityRest
     *
     * @param integer $capacityRest
     *
     * @return Magazin
     */
    public function setCapacityRest($capacityRest)
    {
        $this->capacityRest = $capacityRest;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Get capacityRest
     *
     * @return integer
     */
    public function getCapacityRest()
    {
        return $this->capacityRest;
    }



    /**
     * Set category
     *
     * @param mixed $category
     *
     * @return Magazin
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Set article
     *
     * @param mixed $article
     *
     * @return Magazin
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Set magazinier
     *
     * @param mixed $magazinier
     *
     * @return Magazin
     */
    public function setMagazinier($magazinier)
    {
        $this->magazinier = $magazinier;

        return $this;
    }

    /**
     * Set id_mag
     *
     * @param string $id_mag
     *
     * @return Magazin
     */
    public function setIdMag($id_mag)
    {
        $this->id_mag = $id_mag;

        return $this;
    }

    /**
     * Get category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get article
     *
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * Get magazinier
     *
     * @return mixed
     */
    public function getMagazinier()
    {
        return $this->magazinier;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Magazin
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
}

