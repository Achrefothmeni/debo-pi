<?php

namespace ArticleBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="ArticleBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     *
     */
    private $name;


    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;



    /**
     * @ORM\Column(name="image",type="string")
     * @Assert\NotBlank(message="Upload your image")
     * @Assert\File(mimeTypes={ "image/png", "image/jpeg" })
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="ResourcesBundle\Entity\Magazin")
     * @ORM\JoinColumn(name="magazin_id", referencedColumnName="id_mag")
     */
    private $magazin;

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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set idArticle
     *
     * @param string $idArticle
     *
     * @return Article
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

    }

    /**
     * Get idArticle
     *
     * @return string
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Article
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;


    }
    /**
     * Get magazin
     *
     * @return mixed
     */
    public function getMagazin()
    {
        return $this->magazin;
    }

    /**
     * Set magazin
     *
     * @param mixed $magazin
     *
     * @return Article
     */
    public function setMagazin($magazin)
    {
        $this->magazin = $magazin;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Article
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;


    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Article
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

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

