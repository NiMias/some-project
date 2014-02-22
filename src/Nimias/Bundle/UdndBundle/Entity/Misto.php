<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="oblast_id", type="integer", nullable=false)
     */
    private $oblastId;

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
     * Set oblastId
     *
     * @param integer $oblastId
     * @return Misto
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
}
