<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nimias\Bundle\UdndBundle\Entity\Region;

/**
 * Varta
 *
 * @ORM\Table(name="varta", indexes={@ORM\Index(name="region", columns={"region_id"})})
 * @ORM\Entity
 */
class Varta
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinators", type="text", nullable=true)
     */
    private $coordinators;

    /**
     * @var string
     *
     * @ORM\Column(name="social", type="text", nullable=true)
     */
    private $social;

    /**
     * @var string
     *
     * @ORM\Column(name="badges", type="text", nullable=true)
     */
    private $badges;

    /**
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false)
     */
    private $regionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="varta_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     */
    private $vartaId;
    
    /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="varty")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="region_id")
     */
    protected $region;
    

    /**
     * Set description
     *
     * @param string $description
     * @return Varta
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set coordinators
     *
     * @param string $coordinators
     * @return Varta
     */
    public function setCoordinators($coordinators)
    {
        $this->coordinators = $coordinators;

        return $this;
    }

    /**
     * Get coordinators
     *
     * @return string 
     */
    public function getCoordinators()
    {
        return $this->coordinators;
    }

    /**
     * Set social
     *
     * @param string $social
     * @return Varta
     */
    public function setSocial($social)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get social
     *
     * @return string 
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Set badges
     *
     * @param string $badges
     * @return Varta
     */
    public function setBadges($badges)
    {
        $this->badges = $badges;

        return $this;
    }

    /**
     * Get badges
     *
     * @return string 
     */
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * Set regionId
     *
     * @param integer $regionId
     * @return Varta
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * Get regionId
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Get vartaId
     *
     * @return integer 
     */
    public function getVartaId()
    {
        return $this->id;
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
     * Set region
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Region $region
     * @return Varta
     */
    public function setRegion(\Nimias\Bundle\UdndBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Nimias\Bundle\UdndBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }
}
