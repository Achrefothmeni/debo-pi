<?php

namespace ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fleet
 *
 * @ORM\Table(name="fleet")
 * @ORM\Entity(repositoryClass="ResourcesBundle\Repository\FleetRepository")
 */
class Fleet
{
    /**
     * @var string
     *
     * @ORM\Column(name="matriculation", type="string", length=255)
     * @ORM\Id
     *
     */
    private $matriculation;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=255)
     */
    private $nature;

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
     * Get matriculation
     *
     * @return string
     */
    public function getMatriculation()
    {
        return $this->matriculation;
    }

    /**
     * Set nature
     *
     * @param string $nature
     *
     * @return Fleet
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
    
        return $this;
    }

    /**
     * Get nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Fleet
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
     * @return Fleet
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }
    /**
     * Set matriculation
     *
     * @param string $matriculation
     *
     * @return Fleet
     */
    public function setMatriculation($matriculation)
    {
        $this->matriculation = $matriculation;

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
}

