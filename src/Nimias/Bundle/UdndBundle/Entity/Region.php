<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Region
 *
 * @ORM\Table(name="region", indexes={@ORM\Index(name="district", columns={"district"}), @ORM\Index(name="microd", columns={"microdistrict"}), @ORM\Index(name="misto", columns={"misto_id"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=255, nullable=true)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="microdistrict", type="string", length=255, nullable=true)
     */
    private $microdistrict;

    /**
     * @var integer
     *
     * @ORM\Column(name="misto_id", type="integer", nullable=false)
     */
    private $mistoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     */
    private $regionId;
    
    /**
     * @ORM\ManyToOne(targetEntity="Misto", inversedBy="regiony")
     * @ORM\JoinColumn(name="misto_id", referencedColumnName="misto_id")
     */
    protected $misto;

    /**
     * @ORM\OneToMany(targetEntity="Varta", mappedBy="region")
     */
    protected $varty;
    
    public function __construct()
    {
        $this->varty = new ArrayCollection();
    }


    /**
     * Set district
     *
     * @param string $district
     * @return Region
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set microdistrict
     *
     * @param string $microdistrict
     * @return Region
     */
    public function setMicrodistrict($microdistrict)
    {
        $this->microdistrict = $microdistrict;

        return $this;
    }

    /**
     * Get microdistrict
     *
     * @return string 
     */
    public function getMicrodistrict()
    {
        return $this->microdistrict;
    }

    /**
     * Set mistoId
     *
     * @param integer $mistoId
     * @return Region
     */
    public function setMistoId($mistoId)
    {
        $this->mistoId = $mistoId;

        return $this;
    }

    /**
     * Get mistoId
     *
     * @return integer 
     */
    public function getMistoId()
    {
        return $this->mistoId;
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
     * Get regionId
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->id;
    }

    /**
     * Set misto
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Misto $misto
     * @return Region
     */
    public function setMisto(\Nimias\Bundle\UdndBundle\Entity\Misto $misto = null)
    {
        $this->misto = $misto;

        return $this;
    }

    /**
     * Get misto
     *
     * @return \Nimias\Bundle\UdndBundle\Entity\Misto 
     */
    public function getMisto()
    {
        return $this->misto;
    }

    /**
     * Add varty
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Varta $varty
     * @return Region
     */
    public function addVarty(\Nimias\Bundle\UdndBundle\Entity\Varta $varty)
    {
        $this->varty[] = $varty;

        return $this;
    }

    /**
     * Remove varty
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Varta $varty
     */
    public function removeVarty(\Nimias\Bundle\UdndBundle\Entity\Varta $varty)
    {
        $this->varty->removeElement($varty);
    }

    /**
     * Get varty
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVarty()
    {
        return $this->varty;
    }
}
