<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
}
