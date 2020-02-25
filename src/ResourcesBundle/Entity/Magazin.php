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
     * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Category",inversedBy="fleet")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id_category")
     */
    private $category;

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
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
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

