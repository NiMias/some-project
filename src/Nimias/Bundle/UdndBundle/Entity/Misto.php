<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Misto
 *
 * @ORM\Table(name="misto", indexes={@ORM\Index(name="oblast", columns={"oblast_id"}), @ORM\Index(name="rayon", columns={"rayon_id"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Misto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rayon_id", type="integer", nullable=true)
     */
    private $rayonId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="misto_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     */
    private $mistoId;

    /**
     * @ORM\ManyToOne(targetEntity="Rayon", inversedBy="mista")
     * @ORM\JoinColumn(name="rayon_id", referencedColumnName="rayon_id")
     */
    protected $rayon;

    /**
     * @ORM\OneToMany(targetEntity="Region", mappedBy="misto")
     */
    protected $regiony;
    
    public function __construct()
    {
        $this->regiony = new ArrayCollection();
    }

    /**
     * Set rayonId
     *
     * @param integer $rayonId
     * @return Misto
     */
    public function setRayonId($rayonId)
    {
        $this->rayonId = $rayonId;

        return $this;
    }

    /**
     * Get rayonId
     *
     * @return integer 
     */
    public function getRayonId()
    {
        return $this->rayonId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Misto
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get mistoId
     *
     * @return integer 
     */
    public function getMistoId()
    {
        return $this->id;
    }

    /**
     * Set rayon
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Rayon $rayon
     * @return Misto
     */
    public function setRayon(\Nimias\Bundle\UdndBundle\Entity\Rayon $rayon = null)
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get rayon
     *
     * @return \Nimias\Bundle\UdndBundle\Entity\Rayon 
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Add regiony
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Region $regiony
     * @return Misto
     */
    public function addRegiony(\Nimias\Bundle\UdndBundle\Entity\Region $regiony)
    {
        $this->regiony[] = $regiony;

        return $this;
    }

    /**
     * Remove regiony
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Region $regiony
     */
    public function removeRegiony(\Nimias\Bundle\UdndBundle\Entity\Region $regiony)
    {
        $this->regiony->removeElement($regiony);
    }

    /**
     * Get regiony
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegiony()
    {
        return $this->regiony;
    }
}
