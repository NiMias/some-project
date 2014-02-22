<?php

namespace Nimias\Bundle\UdndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $oblastId;



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
     * Get oblastId
     *
     * @return integer 
     */
    public function getOblastId()
    {
        return $this->oblastId;
    }
}
