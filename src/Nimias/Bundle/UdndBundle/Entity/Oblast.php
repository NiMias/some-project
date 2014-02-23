<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Oblast
 *
 * @ORM\Table(name="oblast", indexes={@ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Oblast
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="oblast_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     */
    private $oblastId;

    /**
     * @ORM\OneToMany(targetEntity="Rayon", mappedBy="oblast")
     */
    protected $rayony;
    
    public function __construct()
    {
        $this->rayony = new ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Oblast
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
     * Get oblastId
     *
     * @return integer 
     */
    public function getOblastId()
    {
        return $this->id;
    }

    /**
     * Add rayony
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Rayon $rayony
     * @return Oblast
     */
    public function addRayony(\Nimias\Bundle\UdndBundle\Entity\Rayon $rayony)
    {
        $this->rayony[] = $rayony;

        return $this;
    }

    /**
     * Remove rayony
     *
     * @param \Nimias\Bundle\UdndBundle\Entity\Rayon $rayony
     */
    public function removeRayony(\Nimias\Bundle\UdndBundle\Entity\Rayon $rayony)
    {
        $this->rayony->removeElement($rayony);
    }

    /**
     * Get rayony
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRayony()
    {
        return $this->rayony;
    }
}
