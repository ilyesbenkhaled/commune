<?php

namespace SMS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liens
 *
 * @ORM\Table(name="liens")
 * @ORM\Entity(repositoryClass="SMS\AdminBundle\Repository\LiensRepository")
 */
class Liens
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
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdate", type="datetime")
     */
    private $dateUpdate;

	/**
	* @ORM\ManyToOne(targetEntity="SMS\AdminBundle\Entity\Langue")
	* @ORM\JoinColumn(nullable=true)
	*/
	private $titre_id;
	
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
     * Set image
     *
     * @param string $image
     * @return Liens
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Liens
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
	
	/**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Liens
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
     * @return Liens
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;
    
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
	
    /**
     * Set titre_id
     *
     * @param \SMS\AdminBundle\Entity\Langue $titreId
     * @return Liens
     */
    public function setTitreId(\SMS\AdminBundle\Entity\Langue $titreId = null)
    {
        $this->titre_id = $titreId;

        return $this;
    }

    /**
     * Get titre_id
     *
     * @return \SMS\AdminBundle\Entity\Langue 
     */
    public function getTitreId()
    {
        return $this->titre_id;
    }
}
