<?php

namespace SMS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="SMS\AdminBundle\Repository\pageRepository")
 */
class page
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
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_menu", type="string", length=255)
     */
    private $titreMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="url_file", type="string", length=255)
     */
    private $urlFile;


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
     * Set content
     *
     * @param string $content
     * @return page
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set titreMenu
     *
     * @param string $titreMenu
     * @return page
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
     * Set urlFile
     *
     * @param string $urlFile
     * @return page
     */
    public function setUrlFile($urlFile)
    {
        $this->urlFile = $urlFile;

        return $this;
    }

    /**
     * Get urlFile
     *
     * @return string 
     */
    public function getUrlFile()
    {
        return $this->urlFile;
    }
}
