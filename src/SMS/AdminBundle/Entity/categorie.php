<?php

namespace SMS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="SMS\AdminBundle\Repository\categorieRepository")
 */
class categorie
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
     * @ORM\Column(name="titre_menu", type="string", length=255)
     */
    private $titreMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * Set titreMenu
     *
     * @param string $titreMenu
     * @return categorie
     */
    public function setTitreMenu($titreMenu)
    {
        $this->titreMenu = $titreMenu;

        return $this;
    }

    /**
     * Get titreMenu
     *
     * @return string 
     */
    public function getTitreMenu()
    {
        return $this->titreMenu;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return categorie
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
}
