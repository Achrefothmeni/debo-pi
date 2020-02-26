<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleAppel_d_offre
 *
 * @ORM\Table(name="article_appel_d_offre")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\ArticleAppel_d_offreRepository")
 */
class ArticleAppel_d_offre
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
     * @ORM\Column(name="quantité", type="integer")
     */
    private $quantité;

    /**
     * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Article")
     * @ORM\JoinColumn(name="id_article",referencedColumnName="id_article")
    */
    private $article;
    /**
     * @param mixed
     */

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @return mixed $article
     */
    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @ORM\ManyToOne(targetEntity="ReclamationBundle\Entity\Appel_d_offre")
     * @ORM\JoinColumn(name="idTender",referencedColumnName="id")
     */
    private $idTender;
    /**
     * @param mixed
     */

    /**
     * @return mixed
     */
    public function getIdTender()
    {
        return $this->idTender;
    }

    /**
     * @return mixed $idTender
     */
    /**
     * @param mixed $idTender
     */
    public function setIdTender($idTender)
    {
        $this->idTender = $idTender;
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
     * Set quantit
     *
     * @param integer $quantité
     *
     * @return ArticleAppel_d_offre
     */
    public function setQuantit($quantité)
    {
        $this->quantité = $quantité;

        return $this;
    }

    /**
     * Get quantit
     *
     * @return int
     */
    public function getQuantité()
    {
        return $this->quantité;
    }
}

