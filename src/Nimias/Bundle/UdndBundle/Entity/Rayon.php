<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rayon
 *
 * @ORM\Table(name="rayon", indexes={@ORM\Index(name="oblast", columns={"oblast_id"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Rayon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="oblast_id", type="integer", nullable=false)
     */
    private $oblastId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="rayon_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     */
    private $rayonId;



    /**
     * Set oblastId
     *
     * @param integer $oblastId
     * @return Rayon
     */
    public function setOblastId($oblastId)
    {
        $this->oblastId = $oblastId;

        return $this;
    }

    /**
     * Get oblastId
     *
     * @return integer 
     */
    public function getOblastId()
    {
        return $this->oblastId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Rayon
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
     * Get rayonId
     *
     * @return integer 
     */
    public function getRayonId()
    {
        return $this->id;
    }
}
