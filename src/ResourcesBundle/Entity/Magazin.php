<?php

namespace ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     *
     */
    private $id_mag;

    /**
     * @var int
     *
     * @ORM\Column(name="capacity", type="integer")
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
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
     * @param string $category
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
     * @return string
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

