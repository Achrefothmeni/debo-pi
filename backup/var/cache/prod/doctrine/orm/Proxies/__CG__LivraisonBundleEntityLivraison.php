<?php

namespace Proxies\__CG__\LivraisonBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Livraison extends \LivraisonBundle\Entity\Livraison implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'id', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'text', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'status', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'dateDepart', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'dateArivee', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'bonDeLivraison', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'livreur'];
        }

        return ['__isInitialized__', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'id', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'text', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'status', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'dateDepart', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'dateArivee', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'bonDeLivraison', '' . "\0" . 'LivraisonBundle\\Entity\\Livraison' . "\0" . 'livreur'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Livraison $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getBonDeLivraison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBonDeLivraison', []);

        return parent::getBonDeLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setBonDeLivraison($bonDeLivraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBonDeLivraison', [$bonDeLivraison]);

        return parent::setBonDeLivraison($bonDeLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getLivreur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLivreur', []);

        return parent::getLivreur();
    }

    /**
     * {@inheritDoc}
     */
    public function setLivreur($livreur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLivreur', [$livreur]);

        return parent::setLivreur($livreur);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setText($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setText', [$text]);

        return parent::setText($text);
    }

    /**
     * {@inheritDoc}
     */
    public function getText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getText', []);

        return parent::getText();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDepart($dateDepart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDepart', [$dateDepart]);

        return parent::setDateDepart($dateDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDepart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDepart', []);

        return parent::getDateDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateArivee($dateArivee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateArivee', [$dateArivee]);

        return parent::setDateArivee($dateArivee);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateArivee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateArivee', []);

        return parent::getDateArivee();
    }

}
