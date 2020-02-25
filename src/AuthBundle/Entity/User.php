<?php

namespace AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AuthBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mat_fiscal", type="string", length=255, nullable=true)
     */
    protected $matFiscal;

    /**
     * @var integer
     * @ORM\Column(name="numero_tel", type="integer", nullable=true)
     */
    protected $num;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    protected $prenom;


    /**
     * @var string
     *
     * @ORM\Column(name="status_livreur", type="string", length=255, nullable=true)
     */
    protected $status = "Disponible";

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
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    /**
     * @return string
     */
    public function getMatFiscal()
    {
        return $this->matFiscal;
    }
    /**
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param string $matFiscal
     */
    public function setMatFiscal($matFiscal)
    {
        $this->matFiscal = $matFiscal;
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


}

