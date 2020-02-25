<?php

namespace ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Date;

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
     * @Assert\NotBlank(message="ne doit pas etre vide")
     * @Assert\Regex(
     *     pattern="/^(1|2|3|4|5|6|7|8|9)(0|1|2|3|4|5|6|7|8|9)(0|1|2|3|4|5|6|7|8|9)TUN(0|1|2|3|4|5|6|7|8|9)(0|1|2|3|4|5|6|7|8|9)(0|1|2|3|4|5|6|7|8|9)(0|1|2|3|4|5|6|7|8|9)$/",
     *     match=true,
     *     message="Your name cannot contain a number"
     * )
     */
    private $matriculation;

    /**
     * @ORM\ManyToOne(targetEntity="Nature",inversedBy="fleet")
     * @ORM\JoinColumn(name="nature_id", referencedColumnName="id")
     */
     public $nature;
    /**
     * @var date
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status = "Disponible";

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }



    /**
     * @var date
     * @Assert\NotBlank(message="ne doit pas etre vide")
     * @Assert\DateTime()
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     * @Assert\GreaterThan(25)
     *
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
     * @var int
     * @Assert\GreaterThan(25)
     *
     * @Assert\NotBlank(message="ne doit pas etre vide")
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/i",
     *     match=true,
     *     message="number"
     * )
     *
     * @ORM\Column(name="kilometrage", type="integer")
     */
    private $kilometrage;
    /**
     * @ORM\Column(name="image",type="string")
     * @Assert\NotBlank(message="Upload your image")
     * @Assert\File(mimeTypes={ "image/png", "image/jpeg" })
     */
    private $image;

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    /**
     * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Category",inversedBy="magazin")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id_category")
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
     * @param mixed $nature
     *
     * @return Fleet
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }


    /**
     * Get date
     *
     * @return date
     */
    public function getDate()
    {
        return $this->date;
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
     * Set kilometrage
     *
     * @param integer $kilometrage
     *
     * @return Fleet
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return integer
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }


    /**
     * Set category
     *
     * @param mixed $category
     *
     * @return Fleet
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }
    /**
     * Set date
     *
     * @param date $date
     *
     * @return Fleet
     */
    public function setDate($date)
    {
        $this->date =$date;

        return $this;
    }
    /**
     * Set matriculation
     *
     * @param string $matriculation
     *
     * @return Fleet
     *
     */
    public function setMatriculation($matriculation)
    {
        $this->matriculation = $matriculation;

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
     * Get nature
     *
     * @return mixed
     */
    public function getNature()
    {
        return $this->nature;
    }
}

