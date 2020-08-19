<?php

namespace SMS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="SMS\AdminBundle\Repository\LangueRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Langue
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
     * @var string
     *
     * @ORM\Column(name="FR_fr", type="text", nullable=true)
     */
    private $fRFr;

    /**
     * @var string
     *
     * @ORM\Column(name="EN_en", type="text", nullable=true)
     */
    private $eNEn;

    /**
     * @var string
     *
     * @ORM\Column(name="AR_ar", type="text", nullable=true)
     */
    private $aRAr;

    /**
     * @var int
     *
     * @ORM\Column(name="titre_id_id", type="integer", nullable=true)
     */
	 
    private $titre_id_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
	
	/**
     * @var \DateTime
     * @ORM\Column(name="dateUpdate", type="datetime")
     */
    private $dateUpdate;
	
	public function __construct(){
		$this->dateCreation = new \DateTime();
		$this->dateUpdate = new \DateTime();
	}
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fRFr
     *
     * @param string $fRFr
     * @return Langue
     */
    public function setFRFr($fRFr)
    {
        $this->fRFr = $fRFr;

        return $this;
    }

    /**
     * Get fRFr
     *
     * @return string 
     */
    public function getFRFr()
    {
        return $this->fRFr;
    }

    /**
     * Set eNEn
     *
     * @param string $eNEn
     * @return Langue
     */
    public function setENEn($eNEn)
    {
        $this->eNEn = $eNEn;

        return $this;
    }

    /**
     * Get eNEn
     *
     * @return string 
     */
    public function getENEn()
    {
        return $this->eNEn;
    }

    /**
     * Set aRAr
     *
     * @param string $aRAr
     * @return Langue
     */
    public function setARAr($aRAr)
    {
        $this->aRAr = $aRAr;

        return $this;
    }

    /**
     * Get aRAr
     *
     * @return string 
     */
    public function getARAr()
    {
        return $this->aRAr;
    }
	
	/**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Langue
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
	
	/**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     * @return Langue
     */
    public function setDateUpdate()
    {
        $this->dateUpdate = new \DateTime();
    
        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime 
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

	public function __toString(){
		
		return (string)$this->eNEn;
		
	}
	
    public function setTitreId($titreId)
    {
        $this->titre_id = $titreId;

        return $this;
    }

    /**
     * Get titre_id
     *
    */
    public function getTitreId($titreId)
    {
        return $this->titre_id;
    }
}
