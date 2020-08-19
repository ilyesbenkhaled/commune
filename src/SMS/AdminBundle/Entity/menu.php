<?php

namespace SMS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="SMS\AdminBundle\Repository\menuRepository")
 * @ORM\HasLifecycleCallbacks
 */
class menu
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
     * @ORM\Column(name="nom_menu", type="string", length=255)
     */
    private $nomMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_menu_id", type="string")
     */
    private $titreMenuId;


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
     * Set nomMenu
     *
     * @param string $nomMenu
     * @return menu
     */
    public function setNomMenu($nomMenu)
    {
        $this->nomMenu = $nomMenu;

        return $this;
    }

    /**
     * Get nomMenu
     *
     * @return string 
     */
    public function getNomMenu()
    {
        return $this->nomMenu;
    }


    /**
     * Set titreMenuId
     *
     * @param string $titreMenuId
     * @return menu
     */
    public function setTitreMenuId($titreMenuId)
    {
        $this->titreMenuId = $titreMenuId;

        return $this;
    }

    /**
     * Get titreMenuId
     *
     * @return string 
     */
    public function getTitreMenuId()
    {
        return $this->titreMenuId;
    }
}
