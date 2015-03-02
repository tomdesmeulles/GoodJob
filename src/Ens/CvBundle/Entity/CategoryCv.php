<?php

namespace Ens\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryCv
 */
class CategoryCv
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cvs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cvs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return CategoryCv
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
     * Add cvs
     *
     * @param \Ens\CvBundle\Entity\Cv $cvs
     * @return CategoryCv
     */
    public function addCv(\Ens\CvBundle\Entity\Cv $cvs)
    {
        $this->cvs[] = $cvs;

        return $this;
    }

    /**
     * Remove cvs
     *
     * @param \Ens\CvBundle\Entity\Cv $cvs
     */
    public function removeCv(\Ens\CvBundle\Entity\Cv $cvs)
    {
        $this->cvs->removeElement($cvs);
    }

    /**
     * Get cvs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCvs()
    {
        return $this->cvs;
    }
}
